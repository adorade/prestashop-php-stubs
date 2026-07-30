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
    protected $reference;
    /**
     * Start forms process.
     *
     * @see FrontController::postProcess()
     */
    public function postProcess()
    {
    }
    /**
     * Assign template vars related to page content.
     *
     * @see FrontController::initContent()
     */
    public function initContent()
    {
    }
    public function getBreadcrumbLinks()
    {
    }
}
