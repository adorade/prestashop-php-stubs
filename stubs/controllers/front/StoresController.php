<?php

class StoresControllerCore extends \FrontController
{
    /** @var string */
    public $php_self = 'stores';
    /** @var \PrestaShop\PrestaShop\Adapter\Presenter\Store\StorePresenter */
    protected $storePresenter;
    /**
     * Initialize stores controller.
     *
     * @see FrontController::init()
     */
    public function init(): void
    {
    }
    /**
     * Assign template vars related to page content.
     *
     * @see FrontController::initContent()
     */
    public function initContent(): void
    {
    }
    public function getTemplateVarStores(): array
    {
    }
    public function getBreadcrumbLinks(): array
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getCanonicalURL(): string
    {
    }
}
