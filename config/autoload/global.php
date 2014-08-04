<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return [
    'asset_manager' => [
        'caching' => [
            'default' => [
                'cache'     => 'AssetManager\\Cache\\FilePathCache',
                'options' => array(
                    'dir' => 'public',
                ),
            ],
        ],
    ],
    'ocra_cached_view_resolver' => [
        // configuration to be passed to `Zend\Cache\StorageFactory#factory()`
        'cache' => [
            'adapter' => [
                'name'    => 'filesystem',
                'options' => [
                    'ttl' => 84600,
                    'namespace' => 'app_view_resolver_' . sha1(realpath(__FILE__)),
                    'cache_dir' => 'data/cache',
                    'dir_level' => 0,
                ],
            ],
            'plugins' => [
                'Serializer'
            ]
        ],

        // following is the key used to store the template map in the cache adapter
        'cached_template_map_key' => 'cached_template_map',
    ],
];
