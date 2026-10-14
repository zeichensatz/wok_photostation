<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'PhotoStation',
    'description' => 'Extension with plugin for display of PhotoStation 6.0 albums (stored on a Synology DiskStation) in TYPO3 frontend',
    'category' => 'plugin',
    'author' => 'Wolfgang Kleinbach',
    'author_email' => 'info@zeichensatz.de',
    'state' => 'stable',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.3',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-14.9.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    // DIESER BLOCK FEHLTE: Definiert das PSR-4 Autoloading für Classic-Extensions
    'autoload' => [
        'psr-4' => [
            'Wok\\WokPhotostation\\' => 'Classes',
        ],
    ],
];
