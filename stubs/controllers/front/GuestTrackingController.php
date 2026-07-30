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
    public function init()
    {
    }
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
    /**
     * {@inheritdoc}
     */
    public function getCanonicalURL()
    {
    }
}
