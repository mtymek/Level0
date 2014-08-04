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
    'view_manager' => [
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
    ],
    'asset_manager' => [
        'caching' => [
            'default' => [
                'cache' => null,
            ],
        ],
    ],
    'ocra_cached_view_resolver' => [
        // disable cached view resolver by setting TTL to 1s
        'cache' => [
            'adapter' => [
                'options' => [
                    'ttl' => 1,
                ],
            ],
        ],
    ],
];
