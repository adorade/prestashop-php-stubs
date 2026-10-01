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
    public function getTemplateVarOrderReturn(\OrderReturn $orderReturn)
    {
    }
    public function getTemplateVarProducts(int $order_return_id, \Order $order)
    {
    }
    public function getTemplateVarCustomization(array $product)
    {
    }
    public function getBreadcrumbLinks(): array
    {
    }
}
