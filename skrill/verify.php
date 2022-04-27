<?php

try {
    // To save
    file_put_contents("post.txt", serialize($_POST));
}
catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
}

try {
    // To save
    file_put_contents("get.txt", serialize($_GET));
}
catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
}

try {
    // To save
    file_put_contents("request.txt", serialize($_REQUEST));
}
catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
}

// Validate the Moneybookers signature
$concatFields = $_POST['merchant_id']
    .$_POST['transaction_id']
    .strtoupper(md5('skrill'))
    .$_POST['mb_amount']
    .$_POST['mb_currency']
    .$_POST['status'];

$MBEmail = 'demoqco@sun-fish.com';

// Ensure the signature is valid, the status code == 2,
// and that the money is going to you
if (strtoupper(md5($concatFields)) == $_POST['md5sig'] && $_POST['status'] == 2 && $_POST['pay_to_email'] == $MBEmail)
{
    // Valid transaction.

    //TODO: generate the product keys and
    //      send them to your customer.
    echo 'Valid transaction.';
}
else
{
    // Invalid transaction. Bail out
    exit;
}
