<?php

class CheckoutPaymentStepCore extends \AbstractCheckoutStep
{
    protected $template = 'checkout/_partials/steps/payment.tpl';
    /**
     * @var ConditionsToApproveFinder
     */
    public $conditionsToApproveFinder;
    /**
     * @var PaymentOptionsFinder
     */
    public $paymentOptionsFinder;
    /**
     * @param Context $context
     * @param TranslatorInterface $translator
     * @param PaymentOptionsFinder $paymentOptionsFinder
     * @param ConditionsToApproveFinder $conditionsToApproveFinder
     */
    public function __construct(\Context $context, \Symfony\Contracts\Translation\TranslatorInterface $translator, \PaymentOptionsFinder $paymentOptionsFinder, \ConditionsToApproveFinder $conditionsToApproveFinder)
    {
    }
    public function handleRequest(array $requestParams = [])
    {
    }
    /**
     * @param array $extraParams
     *
     * @return string
     */
    public function render(array $extraParams = [])
    {
    }
}
