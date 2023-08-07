<?php

return [
    'version' => 1,
    'admin_app_title_suffix' => 'Quattrolinee',
    'block_editor' => [
        'use_twill_blocks' => [],
        'files' => ['video'],
        'crops' => [
            'media' => [
                'desktop' => [
                    [
                        'name' => 'desktop',
                        'ratio' => 16 / 9,
                        'minValues' => [
                            'width' => 100,
                            'height' => 100,
                        ],
                    ],
                ],
                'tablet' => [
                    [
                        'name' => 'tablet',
                        'ratio' => 4 / 3,
                        'minValues' => [
                            'width' => 100,
                            'height' => 100,
                        ],
                    ],
                ],
                'mobile' => [
                    [
                        'name' => 'mobile',
                        'ratio' => 1,
                        'minValues' => [
                            'width' => 100,
                            'height' => 100,
                        ],
                    ],
                ],
            ],
        ]
    ],
    'capsules' => [
        'list' => [
            [
                'name' => 'Pages',
                'enabled' => true,
            ],
            [
                'name' => 'News',
                'enabled' => true
            ],
            [
                'name' => 'NewsCategories',
                'enabled' => true
            ],
            [
                'name' => 'Projects',
                'enabled' => true
            ],
            [
                'name' => 'ProjectCategories',
                'enabled' => true
            ],
            [
                'name' => 'Sectors',
                'enabled' => true,
            ],
            [
                'name' => 'Services',
                'enabled' => true,
            ],
            [
                'name' => 'Teams',
                'enabled' => true,
            ],
            [
                'name' => 'Offices',
                'enabled' => true,
            ],
            [
                'name' => 'Awards',
                'enabled' => true,
            ],
            [
                'name' => 'Certfications',
                'enabled' => true,
            ],
            [
                'name' => 'CertficationCategories',
                'enabled' => true,
            ]
        ],
    ],
];
