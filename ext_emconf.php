<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'FE_User Cards',
    'description' => 'An extension to display fe_user as cards.',
    'category' => 'plugin',
    'author' => 'HamburgerJungeJr',
    'author_company' => '',
    'author_email' => '',
    'state' => 'beta',
    'clearCacheOnLoad' => true,
    'version' => '1.4.1',
    'constraints' => [
        'depends' => [
            'typo3' => '10.0.0-10.9.99',
            'fluid' => '8.0.0-10.9.99',
            'vhs' => '4.3.0-6.9.99'
        ]
    ],
    'autoload' => [
        'psr-4' => [
            'HamburgerJungeJr\\FeUserCards\\' => 'Classes'
        ]
    ],
];
