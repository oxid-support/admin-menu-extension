<?php declare(strict_types=1);

/**
 * Metadata version
 */
$sMetadataVersion = '2.1';

/**
 * Module information
 */
$aModule = [
    'id' => 'oxsadminmenuext',
    'title' => 'OXID Support - Example Admin Page',
    'description' => 'Adds a new admin page with tabs.',
    'thumbnail' => '',
    'version' => '1.0.0',
    'author' => 'OXID Support',
    'url' => 'https://www.oxid-esales.com/',
    'email' => 'support@oxid-esales.com',
    'controllers' => [
        'oxsadminmenuext_example' => \OxidSupport\AdminMenuExtension\Application\Controller\Admin\Example::class,
        'oxsadminmenuext_list'    => \OxidSupport\AdminMenuExtension\Application\Controller\Admin\ExampleList::class,
        'oxsadminmenuext_main'    => \OxidSupport\AdminMenuExtension\Application\Controller\Admin\ExampleMain::class,
        'oxsadminmenuext_extends' => \OxidSupport\AdminMenuExtension\Application\Controller\Admin\ExampleExtends::class,
    ],
    'templates' => [
        'example.tpl'         => 'oxs/oxsadminmenuext/Application/views/admin/example.tpl',
        'example_list.tpl'    => 'oxs/oxsadminmenuext/Application/views/admin/example_list.tpl',
        'example_main.tpl'    => 'oxs/oxsadminmenuext/Application/views/admin/example_main.tpl',
        'example_extends.tpl' => 'oxs/oxsadminmenuext/Application/views/admin/example_extends.tpl',
    ],
];
