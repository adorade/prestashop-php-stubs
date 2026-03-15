<?php

class CheckoutPersonalInformationStepCore extends \AbstractCheckoutStep
{
    protected $template = 'checkout/_partials/steps/personal-information.tpl';
    /**
     * @var bool
     */
    public $logged_in;
    /**
     * @param Context $context
     * @param TranslatorInterface $translator
     * @param CustomerLoginForm $loginForm
     * @param CustomerForm $registerForm
     */
    public function __construct(\Context $context, \Symfony\Contracts\Translation\TranslatorInterface $translator, \CustomerLoginForm $loginForm, \CustomerForm $registerForm)
    {
    }
    public function handleRequest(array $requestParameters = [])
    {
    }
    public function render(array $extraParams = [])
    {
    }
}
