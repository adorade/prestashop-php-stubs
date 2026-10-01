<?php

class OrderConfirmationControllerCore extends \FrontController
{
    /** @var bool */
    public $ssl = \true;
    /** @var string */
    public $php_self = 'order-confirmation';
    /** @var int Cart ID */
    public $id_cart;
    public $id_module;
    public $id_order;
    public $secure_key;
    /** @var Order Order object we found by cart ID */
    protected $order;
    /** @var Customer Customer object related to the cart */
    protected $customer;
    public $reference;
    // Deprecated
    public $order_presenter;
    // Deprecated
    /**
     * Initialize order confirmation controller.
     *
     * @see FrontController::init()
     */
    public function init()
    {
    }
    /**
     * Logic after submitting forms
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
    /**
     * Execute the hook displayPaymentReturn.
     */
    public function displayPaymentReturn($order)
    {
    }
    /**
     * Execute the hook displayOrderConfirmation.
     */
    public function displayOrderConfirmation($order)
    {
    }
    /**
     * Check if an order is free and create it.
     */
    protected function checkFreeOrder()
    {
    }
    public function getBreadcrumbLinks()
    {
    }
    /**
     * @return Order
     */
    public function getOrder()
    {
    }
    /**
     * @return Customer
     */
    public function getCustomer()
    {
    }
}
