<?php

/**
 * StarterTheme TODO: FIXME:
 * In the old days, when updating an address, we actually:
 * - checked if the address was used by an order
 * - if so, just mark it as deleted and create a new one
 * - otherwise, update it like a normal entity
 * I *think* this is not necessary now because the invoicing thing
 * does its own historization. But this should be checked more thoroughly.
 */
class CustomerAddressFormCore extends \AbstractForm
{
    protected $template = 'customer/_partials/address-form.tpl';
    /**
     * @var CustomerAddressFormatter
     */
    protected $formatter;
    public function __construct(\Smarty $smarty, \Language $language, \Symfony\Contracts\Translation\TranslatorInterface $translator, \CustomerAddressPersister $persister, \CustomerAddressFormatter $formatter)
    {
    }
    public function loadAddressById($id_address)
    {
    }
    public function fillWith(array $params = [])
    {
    }
    public function validate()
    {
    }
    public function submit()
    {
    }
    /**
     * @return Address
     */
    public function getAddress()
    {
    }
    /**
     * @return CustomerAddressPersister
     */
    protected function getPersister()
    {
    }
    protected function setAddress(\Address $address)
    {
    }
    public function getTemplateVariables()
    {
    }
}
