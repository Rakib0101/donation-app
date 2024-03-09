<?php

namespace App\Http\Controllers;

use App\Facades\UddoktaPay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{
    public function pay(Request $request)
    {
        $baseURL = 'https://pay.marketor.xyz/';
        $apiKEY = 'ddb312107b353a60156dbab85456c1024b9928a5';

        $amount = $request->input('amount');

        $fields = [
            'full_name'     => 'Shahin',
            'email'         => 'shahin@mail.com',
            'amount'        => $amount,
            'metadata'      => [
                'user_id'   => '10',
                'order_id'  => '50'
            ],
            'redirect_url'  => 'http://localhost:8001/payment_success?d=',
            'return_type'   => 'GET',
            'cancel_url'    => 'http://localhost:8001/payment_cancel?d=',
            'webhook_url'   => 'http://localhost:8001',
        ];

        $response = Http::withHeaders([
            "RT-UDDOKTAPAY-API-KEY" => $apiKEY,
            "Accept" => "application/json",
            "Content-Type" => "application/json"
        ])
            ->post("$baseURL/api/checkout-v2", $fields)
            ->json();

        return redirect()->away(data_get($response, 'payment_url'));
    }

    public function acceptPayment(Request $request)
    {
        $registered = "https://marketor.xyz";
        // $registered = "http://localhost:8001";

        $request->validate([
            'full_name' => 'nullable|string|min:1',
            'email' => 'nullable|email',
            'amount' => 'nullable|numeric|min:0',
            'metadata' => 'nullable|array',
            'domain' => 'nullable|string'
        ]);

        $domain = $request->get('domain', $request->header('origin'));

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

            if ($paymentUrl = data_get($response, 'payment_url')) {
                return redirect()->away($paymentUrl);
            } else {
                return redirect()->away("{$registered}/payment_cancel?d={$domain}");
            }
        } catch (\Throwable $th) {
            info($th->getMessage());
            return redirect()->back()->with('error', $th->getMessage())->withInput();
        }
    }

    public function success(Request $request)
    {
        if ($request->get('d')) {
            return redirect()->away($request->d);
        }

        return view('payment.success');
    }

    public function cancel(Request $request)
    {
        if ($request->get('d')) {
            return redirect()->away($request->d);
        }

        return view('payment.cancel');
    }
}
