<?php declare(strict_types=1);


namespace OxidSupport\AdminMenuExtension\Application\Controller\Admin;

use OxidEsales\Eshop\Application\Controller\Admin\AdminDetailsController;

class ExampleMain extends AdminDetailsController
{
    public function render()
    {
        parent::render();
        return 'example_main.tpl';
    }
}