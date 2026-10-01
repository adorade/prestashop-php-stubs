<?php

class OrderDetailControllerCore extends \FrontController
{
    /** @var string */
    public $php_self = 'order-detail';
    /** @var bool */
    public $auth = \true;
    /** @var string */
    public $authRedirection = 'history';
    /** @var bool */
    public $ssl = \true;
    protected $order_to_display;
    protected $order;
    protected $reference;
    protected function loadOrder(): void
    {
    }
    /**
     * Start forms process.
     *
     * @see FrontController::postProcess()
     */
    public function postProcess(): void
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
    public function getBreadcrumbLinks(): array
    {
    }
}
