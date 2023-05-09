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
    'title' => 'Adds a new admin page with tabs.',
    'description' => '',
    'thumbnail' => '',
    'version' => '1.0',
    'author' => 'OXID Support',
    'controllers' => [
        'oxsadminmenuext_example'    => \OxidSupport\AdminMenuExtension\Application\Controller\Admin\Example::class,
        'oxsadminmenuext_list'       => \OxidSupport\AdminMenuExtension\Application\Controller\Admin\ExampleList::class,
        'oxsadminmenuext_main'       => \OxidSupport\AdminMenuExtension\Application\Controller\Admin\ExampleMain::class,
        'oxsadminmenuext_extends'    => \OxidSupport\AdminMenuExtension\Application\Controller\Admin\ExampleExtends::class,
    ],
    'templates' => [
        'example.tpl'               => 'oxs/adminmenuext/Application/views/admin/example.tpl',
        'example_list.tpl'          => 'oxs/adminmenuext/Application/views/admin/example_list.tpl',
        'example_main.tpl'          => 'oxs/adminmenuext/Application/views/admin/example_main.tpl',
        'example_extends.tpl'       => 'oxs/adminmenuext/Application/views/admin/example_extends.tpl',
    ],
];
