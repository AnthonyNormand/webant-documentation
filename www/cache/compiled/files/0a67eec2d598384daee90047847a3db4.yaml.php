<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'E:/UwAmp/www/user/config/plugins/simplesearch.yaml',
    'modified' => 1485382490,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'display_button' => true,
        'min_query_length' => 3,
        'route' => '/search',
        'template' => 'simplesearch_results',
        'filters' => [
            'category' => [
                0 => 'blog'
            ]
        ],
        'filter_combinator' => 'and',
        'ignore_accented_characters' => true,
        'order' => [
            'by' => 'date',
            'dir' => 'desc'
        ]
    ]
];
