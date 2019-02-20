<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3 Extbase Book - Site Package',
    'description' => 'TYPO3 v9 Site Package (frontend theme)',
    'category' => 'templates',
    'author' => 'Michael Schams',
    'author_email' => '',
    'author_company' => '',
    'version' => '1.0.0',
    'state' => 'stable',
    'constraints' => [
        'depends' => [
            'typo3' => '9.0.0-9.5.99',
            'fluid_styled_content' => '9.0.0-9.5.99'
        ],
        'conflicts' => [
        ],
    ],
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1
];
