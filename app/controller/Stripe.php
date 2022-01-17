<?php
require './vendor/autoload.php';
header('Content-Type', 'application/json');

$stripe = new Stripe\StripeClient("sk_test_51KHDXdCl0WW6IfVY6oIrQ26UPVHEU2mwUTQNYXBWXyfmZiTmCzlTfdjZ2Q3tVfmcRr4Ocmfak92dQ5Fkt3EIAQJy00bjoE0vNw");
$session = $stripe->checkout->sessions->create([
    "success_url" => "www.google.com",
    "cancel_url" => "www.twitter.com",
    "payment_method_types" => ['card'],
    "mode" => 'payment',
    "lineItems" => [
        [
            "price" => "price_1KHDkACl0WW6IfVY0ZvzojaV",
            "quantity" => 1,
        ]
    ]
]);

echo var_dump(json_encode($session));