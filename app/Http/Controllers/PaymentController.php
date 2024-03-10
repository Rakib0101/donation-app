<?php

namespace App\Http\Controllers;

use App\Facades\UddoktaPay;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function pay(Request $request)
    {
        $amount = $request->input('amount');

        $fields = [
            'full_name'     => 'Shahin',
            'email'         => 'shahin@mail.com',
            'amount'        => $amount,
            'metadata'      => [
                'user_id'   => '10',
                'order_id'  => '50'
            ],
            'redirect_url'  => 'https://marketor.xyz/payment_success',
            'return_type'   => 'GET',
            'cancel_url'    => 'https://marketor.xyz/payment_cancel',
            'webhook_url'   => 'https://marketor.xyz',
        ];

        $response = UddoktaPay::pay($fields);

        return redirect()->away(data_get($response, 'payment_url'));
    }

    public function acceptPayment(Request $request)
    {
        $registered = "https://marketor.xyz";

        $domain = $request->get('domain', $request->header('origin'));

        $request->validate([
            'full_name' => 'nullable|string|min:1',
            'email' => 'nullable|email',
            'amount' => 'required|numeric|min:0',
            'metadata' => 'nullable',
            'domain' => $domain ? 'nullable|string' : 'required|string|url',
        ]);

        $fields = [
            'full_name' => $request->get('full_name', 'Shahin'),
            'email' => $request->get('email', 'shahin@mail.com'),
            'amount' => $request->get('amount'),
            'metadata'      => [
                'user_id'   => '10',
                'order_id'  => '50'
            ],
            'redirect_url' => "{$registered}/payment_success?d={$domain}",
            'return_type' => 'GET',
            'cancel_url' => "{$registered}/payment_cancel?d={$domain}",
            'webhook_url' => "{$registered}",
        ];

        try {
            $response = UddoktaPay::pay($fields);

            $paymentUrl = data_get($response, 'payment_url');

            if ($request->wantsJson()) {
                return $paymentUrl
                    ? response()->json(['payment_url' => $paymentUrl])
                    : response()->json(['error' => 'Payment URL not found'], 400);
            } else {
                $link = $paymentUrl ?: "{$registered}/payment_cancel?d={$domain}";
                return redirect()->away($link);
            }
        } catch (\Throwable $th) {
            info($th->getMessage());

            return request()->wantsJson()
                ? response()->json(['error' => $th->getMessage()], 500)
                : redirect()->back()->with('error', $th->getMessage())->withInput();
        }
    }

    public function success(Request $request)
    {
        $d = $request->get('d');
        $host = $request->getSchemeAndHttpHost();

        if ($d && $d != $host) {
            return redirect()->away($request->d);
        }

        return view('payment.success');
    }

    public function cancel(Request $request)
    {
        $d = $request->get('d');
        $host = $request->getSchemeAndHttpHost();

        if ($d && $d != $host) {
            return redirect()->away($request->d);
        }

        return view('payment.cancel');
    }
}
