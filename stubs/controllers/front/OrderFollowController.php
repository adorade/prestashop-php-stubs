<?php

class OrderFollowControllerCore extends \FrontController
{
    /** @var bool */
    public $auth = \true;
    /** @var string */
    public $php_self = 'order-follow';
    /** @var string */
    public $authRedirection = 'order-follow';
    /** @var bool */
    public $ssl = \true;
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
    public function getTemplateVarOrdersReturns()
    {
    }
    public function getBreadcrumbLinks()
    {
    }
}
