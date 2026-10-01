<?php

class OrderReturnControllerCore extends \FrontController
{
    /** @var bool */
    public $auth = \true;
    /** @var string */
    public $php_self = 'order-return';
    /** @var string */
    public $authRedirection = 'order-follow';
    /** @var bool */
    public $ssl = \true;
    /**
     * Initialize order return controller.
     *
     * @see FrontController::init()
     */
    public function init()
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
    public function getTemplateVarOrderReturn($orderReturn)
    {
    }
    public function getTemplateVarProducts($order_return_id, $order)
    {
    }
    public function getTemplateVarCustomization(array $product)
    {
    }
    public function getBreadcrumbLinks()
    {
    }
}
