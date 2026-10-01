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
    public function postProcess(): void
    {
    }
    protected function sendRenewPasswordLink(): void
    {
    }
    protected function changePassword(): void
    {
    }
    /**
     * @return void
     */
    public function display(): void
    {
    }
    /**
     * @return array
     */
    protected function getErrors(): array
    {
    }
    /**
     * @return array
     */
    protected function getSuccesses(): array
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
