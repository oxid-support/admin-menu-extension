<?php declare(strict_types=1);


namespace OxidSupport\AdminMenuExtension\Application\Controller\Admin;

use OxidEsales\Eshop\Application\Controller\Admin\AdminDetailsController;

class ExampleExtends extends AdminDetailsController
{
    public function render()
    {
        return 'example_extends.tpl';
    }
}