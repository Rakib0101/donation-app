<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::post('payment', function (Request $request) {


$baseURL = 'https://pay.marketor.xyz/';
$apiKEY = 'ddb312107b353a60156dbab85456c1024b9928a5';

// $baseURL = 'https://pay.marke.xyz/';
// $apiKEY = 'f41cb6c768ed2c2e2fc8198cd1565e23fc72fde6';

$amount = $request->input('amount');

$fields = [
    'full_name'     => 'Shahin',
    'email'         => 'shahin@mail.com',
    'amount'        => $amount,
    'metadata'      => [
        'user_id'   => '10',
        'order_id'  => '50'
    ],
    'redirect_url'  => 'https://marketor.xyz',
    'return_type'   => 'GET',
    'cancel_url'    => 'https://marketor.xyz',
    'webhook_url'   => 'https://marketor.xyz',
];


$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => $baseURL . "api/checkout-v2",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => [
    "RT-UDDOKTAPAY-API-KEY: " . $apiKEY,
    "accept: application/json",
    "content-type: application/json"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
        // Log::info($response);
        $response = json_decode($response, true);
        // Redirect to payment URL
        return redirect()->to(data_get($response, 'payment_url'));
}
})->name('payment');
