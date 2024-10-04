<?php

/** @noinspection PhpUndefinedVariableInspection */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Registeraddress Honeypot',
    'description' => 'Registeraddress connector with extbase honeypot',
    'category' => 'plugin',
    'author' => 'undkonsorten',
    'author_email' => 'kontakt@undkonsorten.com',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.1.1',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0 - 13.4.99',
            "registeraddress" => "4.1.0 - 6.99.99",
            "extbase_honeypot" => "0.1.1 - 0.1.99",
        ],
    ],
];
