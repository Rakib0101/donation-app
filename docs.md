# Marketor Developer Doc

#### URL: https://marketor.xyz/accept-payment

### Form

```html
<!-- 
  Form will automatically redirect to payment url
  Domain will be taken from the originating domain
 -->

<form action="https://marketor.xyz/accept-payment" method="POST">
  <label for="amount">Please Insert Pay Amount</label>
  <input type="number" name="amount" placeholder="Enter Amount" />
  <button type="submit">Pay</button>
</form>


<!-- Your are free to provide additional details as input like -->

  <input type="text" name="full_name" placeholder="Enter Your Fullname" />
  <input type="email" name="email" placeholder="Enter Your Email" />
  <input type="text" name="domain" placeholder="Url for redirecting after success" />
  <input type="text" name="metadata[order_id]" value="10">
  <input type="text" name="metadata[product_id]" value="5">

```

### API

```jsx
let response = await fetch("https://marketor.xyz/accept-payment", { 
  method: "POST",
  headers: {
	 "Accept": "application/json",
	 "Content-Type": "application/json"
	},
	body: JSON.stringify({
	  "amount":200,
	  "domain": "https://yourdomain.com"
	}),
});

let data = await response.json();
```

```php
<?php

$curl = curl_init();

$data = [
	"amount" => 200,
	"domain" => "https://google.com"
];

curl_setopt_array($curl, [
  CURLOPT_URL => "https://marketor.xyz/accept-payment",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($data),
  CURLOPT_HTTPHEADER => [
    "Accept: application/json",
    "Content-Type: application/json",
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
```

Response

```js
// if success
// Status 200 OK 
{ "payment_url": "https://pay.marketor.xyz/payment/6413a9dad805e4203efaf649fd42fdcdf0e3d199" }

// if validation failed
// Status: 422 Unprocessable Entity
{
  "message": "The amount field is required.",
  "errors": {
    "amount": [
      "The amount field is required."
    ]
  }
} 
```

### Accepted Parameters

| Name | Required | Default Value | Description |
| --- | --- | --- | --- |
| amount | true | null | Must be numeric & greater than 0 |
| full_name | false | Shahin | Must be a string with minimum 1 character |
| email | false | mailto:shahin@mail.com | Must be a valid email |
| metadata | false | { "order_id": "10", "product_id": "5" } | Additional project-specific data in JSON format. |
| domain | false | Requesting URL  | By default, the origin URL will be designated as the returning address. However, if a domain value is specified, it will take precedence for redirection following successful payment or cancellation. This is must be a valid url |