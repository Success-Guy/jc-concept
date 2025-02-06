<?php

require_once('class/paystack.php');
require_once('class/common.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = test_input($_POST['search-keyword']);
    $phone = test_input($_POST['phone-keyword']);

    $rand = random_int(100, 10000000);

    $data = [
        'email' => "admin@jcconcepts.com",
        'name' => $name,
        'amount' => "100000",
        'reference' => "search-$name-$rand",
        'callback_url'=>"http://homecruise.com.sa/verify.php",
        // 'callback_url' => "https://www.jcconcepts.com.ng/verify.php",
        'metadata' => [
            "customer" =>
            [
                "name" => $name,
                "phone" => $phone,
            ],
        ]
    ];
    $result = initialise($data);
    $link = getUrl($result);
    header("location: $link");
} else {
    header("location: index.php");
}
