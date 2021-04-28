<?php
declare(strict_types = 1);

return [
    \HamburgerJungeJr\FeUserCards\Domain\Model\ExtendedFrontendUser::class => [
        'tableName' => 'fe_users',
        'properties' => [
            'feUserCardsPosition' => [
                'fieldName' => 'tx_fe_user_cards_position'
            ],
            'feUserCardsMobile' => [
                'fieldName' => 'tx_fe_user_cards_mobile'
            ],
            'feUserCardsSorting' => [
                'fieldName' => 'tx_fe_user_cards_sorting'
            ],
        ],
    ],
];