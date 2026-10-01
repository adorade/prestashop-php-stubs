<?php

class OrderControllerCore extends \FrontController
{
    /** @var bool */
    public $ssl = \true;
    /** @var string */
    public $php_self = 'order';
    /** @var string */
    public $page_name = 'checkout';
    public $checkoutWarning = [];
    /**
     * @var CheckoutProcess
     */
    protected $checkoutProcess;
    /**
     * @var CartChecksum
     */
    protected $cartChecksum;
    /**
     * Overrides the same parameter in FrontController
     *
     * @var bool automaticallyAllocateInvoiceAddress
     */
    protected $automaticallyAllocateInvoiceAddress = \false;
    /**
     * Overrides the same parameter in FrontController
     *
     * @var bool
     */
    protected $automaticallyAllocateDeliveryAddress = \false;
    /**
     * Initialize order controller.
     *
     * @see FrontController::init()
     */
    public function init(): void
    {
    }
    public function postProcess(): void
    {
    }
    /**
     * @return CheckoutProcess
     */
    public function getCheckoutProcess(): \CheckoutProcess
    {
    }
    /**
     * Without an entry of its own the breadcrumb holds nothing but the home link, and a
     * one-level breadcrumb is what themes hide as empty. The cart page it is reached from
     * already carries one, so the checkout was the last step of that path with none.
     */
    public function getBreadcrumbLinks(): array
    {
    }
    /**
     * @return CheckoutSession
     */
    public function getCheckoutSession(): \CheckoutSession
    {
    }
    protected function bootstrap(): void
    {
    }
    /**
     * Persists cart-related data in checkout session.
     *
     * @param CheckoutProcess $process
     */
    protected function saveDataToPersist(\CheckoutProcess $process)
    {
    }
    /**
     * Restores from checkout session some previously persisted cart-related data.
     *
     * @param CheckoutProcess $process
     */
    protected function restorePersistedData(\CheckoutProcess $process)
    {
    }
    public function displayAjaxselectDeliveryOption(): void
    {
    }
    public function displayAjaxCheckCartStillOrderable(): void
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
    public function displayAjaxAddressForm(): void
    {
    }
    /**
     * Return default TOS link for checkout footer
     *
     * @return string|bool
     */
    protected function getDefaultTermsAndConditions(): string|bool
    {
    }
    /**
     * @param CheckoutSession $session
     * @param \PrestaShopBundle\Translation\TranslatorComponent $translator
     *
     * @return CheckoutProcess
     */
    protected function buildCheckoutProcess(\CheckoutSession $session, $translator)
    {
    }
}
