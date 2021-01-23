<?php
return [
    'name' => 'Mautic Demo Plugin',
    'description' => 'This plugin is just a demo plugin, to demonstrate how to create mautic plugin.',
    'author' => 'Mayank Tiwari',
    'version' => '1.0.0',
    'routes' => [
        'main' => [
            'mautic.demo.demo_secured' => [
                'path' => 'demo_secured',
                'controller' => 'MauticDemoBundle:Demo:index'
            ]
        ],
        'public' => [
            'mautic.demo.demo_public' => [
                'path' => 'demo_public',
                'controller' => 'MauticDemoBundle:Demo:publicIndex'
            ]
        ]
    ],
    'menu' => [
        'main' => [
            'items' => [
                'mautic.demo.menu.demo' => [
                    'id' => 'demo_menu',
                    'iconClass' => 'fa-check',
                    'route' => 'mautic.demo.demo_secured'
                ]
            ]
        ]
    ],
    'services' => [
        'integrations' => [
            'mautic.integration.demo' => [
                'class'=>\MauticPlugin\MauticDemoBundle\Integration\DemoIntegration::class,
                'arguments' => [
                    'event_dispatcher',
                    'mautic.helper.cache_storage',
                    'doctrine.orm.entity_manager',
                    'session',
                    'request_stack',
                    'router',
                    'translator',
                    'logger',
                    'mautic.helper.encryption',
                    'mautic.lead.model.lead',
                    'mautic.lead.model.company',
                    'mautic.helper.paths',
                    'mautic.core.model.notification',
                    'mautic.lead.model.field',
                    'mautic.plugin.model.integration_entity',
                    'mautic.lead.model.dnc',
                ]
            ]
        ]
    ]
];