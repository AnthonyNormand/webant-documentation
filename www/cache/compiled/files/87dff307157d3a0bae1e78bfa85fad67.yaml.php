<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/media/anthony/data/Grav/www/user/plugins/editable/blueprints.yaml',
    'modified' => 1497706740,
    'data' => [
        'name' => 'Editable',
        'version' => '1.0.1',
        'testing' => false,
        'description' => '**Editable** adds Front-end Editing to Grav',
        'icon' => 'edit',
        'author' => [
            'name' => 'Ron Wardenier',
            'email' => 'ron@wardenier.com'
        ],
        'homepage' => 'https://github.com/bleutzinn/grav-plugin-editable',
        'demo' => NULL,
        'keywords' => 'plugin, editor, wysiwyg, markdown, editing, editable, front-end ,in-line, in-context',
        'bugs' => 'https://github.com/bleutzinn/grav-plugin-editable/issues',
        'docs' => 'https://github.com/bleutzinn/grav-plugin-editable/blob/dev/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => 'shortcode-core'
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin Enabled',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
