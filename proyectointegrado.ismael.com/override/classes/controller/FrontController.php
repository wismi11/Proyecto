<?php
class FrontController extends FrontControllerCore
{
    /*
    * module: dbrichsnippets
    * date: 2021-04-06 12:26:02
    * version: 1.0.0
    */
    protected function getBreadcrumbLinks()
    {
        $breadcrumb = [];
        $breadcrumb['links'][] = [
            'title' => $this->getTranslator()->trans('Expertos en PrestaShop', [], 'Shop.Theme.Global'),
            'url' => $this->context->link->getPageLink('index', true),
        ];
        return $breadcrumb;
    }
}