<?php declare(strict_types=1);


namespace OxidSupport\AdminMenuExtension\Application\Controller\Admin;

use OxidEsales\Eshop\Application\Controller\Admin\AdminListController;

class ExampleList extends AdminListController
{
    public function render()
    {
        parent::render();

        return 'example_list.tpl';
    }
}