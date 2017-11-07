<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/media/anthony/data/Grav/www/user/plugins/prism-highlight/blueprints.yaml',
    'modified' => 1497707366,
    'data' => [
        'name' => 'Prism Highlighter',
        'version' => '1.0.0',
        'description' => 'This plugin provides code highlighting functionality via the [Prism.js](http://prismjs.com/) syntax highlighter. Based on [Grav Highlight Plugin](https://github.com/getgrav/grav-plugin-highlight).',
        'icon' => 'code',
        'author' => [
            'name' => 'Álvaro S.',
            'email' => 'alvaro@alvr.me',
            'url' => 'http://alvr.me'
        ],
        'homepage' => 'https://github.com/alvr/grav-prism-highlight',
        'demo' => 'http://alvr.me/proyectos/grav-prism-highlighter',
        'keywords' => 'highlight, plugin, code, prism',
        'bugs' => 'https://github.com/alvr/grav-prism-highlight/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'theme' => [
                    'type' => 'select',
                    'label' => 'CSS Theme',
                    'default' => 'default',
                    'options' => [
                        'default' => 'Default',
                        'coy' => 'Coy',
                        'dark' => 'Dark',
                        'funky' => 'Funky',
                        'okaidia' => 'Okaidia',
                        'solarized-light' => 'Solarized Light',
                        'twilight' => 'Twilight'
                    ]
                ]
            ]
        ]
    ]
];
