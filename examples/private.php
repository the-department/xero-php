<?php

use XeroPHP\Application\PrivateApplication;

//These are the minimum settings - for more options, refer to examples/config.php
$config = [
    'oauth' => [
        'callback' => 'http://localhost/',
        'consumer_key' => 'VJ6YKUXUNEMA7AALDMMJBARJNVJNF8',
        'consumer_secret' => 'OYQSNI2NPK5W8OS81ITQJUOZXDYXJT',
        'rsa_private_key' => 'file://users/rwilson/WWC/Koko/resources/keys/privatekey.pem',
    ],
];

$xero = new PrivateApplication($config);

print_r($xero->load('Accounting\\Organisation')->execute());
