<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Blog extension',
    'description' => 'A page based blog extension.',
    'category' => 'plugin',
    'author' => 'Raphael Thanner',
    'author_email' => 'r.thanner@zeroseven.de',
    'author_company' => 'zeroseven design studios GmbH',
    'state' => 'stable',
    'clearCacheOnLoad' => 1,
    'version' => '0.1.2',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'pagebased' => ''
        ]
    ]
];
