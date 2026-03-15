<?php

class PasswordControllerCore extends \FrontController
{
    /** @var string */
    public $php_self = 'password';
    /** @var bool */
    public $auth = \false;
    /** @var bool */
    public $ssl = \true;
    public function __construct()
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
    protected function sendRenewPasswordLink()
    {
    }
    protected function changePassword()
    {
    }
    /**
     * @return bool
     */
    public function display()
    {
    }
    /**
     * @return array
     */
    protected function getErrors()
    {
    }
    /**
     * @return array
     */
    protected function getSuccesses()
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
