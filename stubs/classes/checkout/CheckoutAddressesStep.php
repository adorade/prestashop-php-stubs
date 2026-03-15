<?php

class CheckoutAddressesStepCore extends \AbstractCheckoutStep
{
    protected $template = 'checkout/_partials/steps/addresses.tpl';
    /**
     * @param Context $context
     * @param TranslatorInterface $translator
     * @param CustomerAddressForm $addressForm
     */
    public function __construct(\Context $context, \Symfony\Contracts\Translation\TranslatorInterface $translator, \CustomerAddressForm $addressForm)
    {
    }
    public function getDataToPersist()
    {
    }
    public function restorePersistedData(array $data)
    {
    }
    public function handleRequest(array $requestParams = [])
    {
    }
    public function getTemplateParameters()
    {
    }
    public function render(array $extraParams = [])
    {
    }
}
