<?php
define('STATUS_CLOSED', 0); // Closed, working fine
define('STATUS_OPEN', 1);   // Open for play
define('STATUS_BROKEN', 2); // Closed with a reason

$bowling = [
    [
        'status' => STATUS_OPEN,
        'bowls' => [
            [true, false, false, true],
            [false, false, true],
            [false, true],
            [true]
        ],
        'problems' => []
    ],
    [
        'status' => STATUS_BROKEN,
        'bowls' => [
            [false, false, false, false],
            [false, false, false],
            [false, false],
            [false]
        ],
        'problems' => [
            'Client pissed the floor all over, need to clean it before opening'
        ]
    ]
];

var_dump($bowling);