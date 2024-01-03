<?php
return [
    'backend' => [
        'frontName' => 'admin_1vip6b'
    ],
    'cache' => [
        'graphql' => [
            'id_salt' => 'LNj2I7ViVBtx4J7EMJj2PViBjS59Y0vS'
        ],
        'frontend' => [
            'default' => [
                'id_prefix' => 'a13_'
            ],
            'page_cache' => [
                'id_prefix' => 'a13_'
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => '0497440a11e429ea3a419318459c51c6'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'localhost',
                'dbname' => 'magento20dec',
                'username' => 'magento20dec',
                'password' => 'magento20dec',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'session' => [
        'save' => 'files'
    ],
    'lock' => [
        'provider' => 'db'
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1
    ],
    'downloadable_domains' => [
        'magento20dec.com'
    ],
    'install' => [
        'date' => 'Wed, 20 Dec 2023 07:06:20 +0000'
    ]
];
