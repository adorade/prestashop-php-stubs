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
    public function init(): void
    {
    }
    /**
     * Logic after submitting forms
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
    /**
     * Execute the hook displayPaymentReturn. This hook should be used to display payment
     * information on the order confirmation page. Payment status, instructions, QR code etc.
     */
    public function displayPaymentReturn(\Order $order)
    {
    }
    /**
     * Execute the hook displayOrderConfirmation.
     */
    public function displayOrderConfirmation(\Order $order)
    {
    }
    /**
     * Check if an order is free and create it. After creation, we redirect to the same page
     * which will display the order confirmation as usual.
     */
    protected function checkFreeOrder(): void
    {
    }
    public function getBreadcrumbLinks(): array
    {
    }
    /**
     * @return Order
     */
    public function getOrder(): \Order
    {
    }
    /**
     * @return Customer
     */
    public function getCustomer(): \Customer
    {
    }
}
