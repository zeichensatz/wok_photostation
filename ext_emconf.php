<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'PhotoStation',
    'description' => 'Extension with plugin for display of PhotoStation 6.0 albums (stored on a Synology DiskStation) in TYPO3 frontend',
    'category' => 'plugin',
    'author' => 'Wolfgang Kleinbach',
    'author_email' => 'info@zeichensatz.de',
    'state' => 'stable',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.2',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
