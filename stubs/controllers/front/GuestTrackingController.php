<?php

class GuestTrackingControllerCore extends \FrontController
{
    /** @var bool */
    public $ssl = \true;
    /** @var bool */
    public $auth = \false;
    /** @var string */
    public $php_self = 'guest-tracking';
    protected $order;
    /**
     * Initialize guest tracking controller.
     *
     * @see FrontController::init()
     */
    public function init(): void
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
    /**
     * {@inheritdoc}
     */
    public function getCanonicalURL(): string
    {
    }
}
