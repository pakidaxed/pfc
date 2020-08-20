<?php
define('STATUS_CLOSED', 0);   // Closed, working fine
define('STATUS_OPEN', 1);     // Open for play
define('STATUS_BROKEN', 2);   // Closed with a reason

define('PROBLEM_PRIORITY_LOW', 0);    // Need planing
define('PROBLEM_PRIORITY_MID', 1);    // Period 30 days
define('PROBLEM_PRIORITY_HIGH', 2);   // Period 1 week
define('PROBLEM_PRIORITY_URGENT', 3); // Today (ASAP)


$bowling = [
    [
        'status' => STATUS_OPEN,
        'pins' => [
            [true, false, false, true],
            [false, false, true],
            [false, true],
            [true]
        ],
        'problems' => [
            [
                'message' => 'Missing one of the chairs by the table',
                'priority' => PROBLEM_PRIORITY_MID
            ]
        ]
    ],
    [
        'status' => STATUS_BROKEN,
        'pins' => [
            [false, false, false, false],
            [false, false, false],
            [false, false],
            [false]
        ],
        'problems' => [
            [
                'message' => 'Client pissed the floor all over, need to clean it before opening',
                'priority' => PROBLEM_PRIORITY_URGENT
            ],
            [
                'message' => 'Some of the bowls are old',
                'priority' => PROBLEM_PRIORITY_LOW
            ]
        ]
    ]
];

var_dump($bowling);