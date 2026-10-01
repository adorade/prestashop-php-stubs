<?php

/**
 * StarterTheme TODO: B2B fields, Genders, CSRF.
 */
class CustomerFormCore extends \AbstractForm
{
    protected $template = 'customer/_partials/customer-form.tpl';
    /**
     * @var CustomerFormatter
     */
    protected $formatter;
    public function __construct(\Smarty $smarty, \Context $context, \Symfony\Contracts\Translation\TranslatorInterface $translator, \CustomerFormatter $formatter, \CustomerPersister $customerPersister, array $urls)
    {
    }
    public function setGuestAllowed($guest_allowed = \true)
    {
    }
    public function setPasswordRequired($passwordRequired)
    {
    }
    public function fillWith(array $params = [])
    {
    }
    public function fillFromCustomer(\Customer $customer)
    {
    }
    /**
     * @return \Customer
     */
    public function getCustomer()
    {
    }
    public function validate()
    {
    }
    protected function validateFieldsLengths()
    {
    }
    /**
     * @param string $fieldName
     * @param int $maximumLength
     * @param string $violationMessage
     */
    protected function validateFieldLength($fieldName, $maximumLength, $violationMessage)
    {
    }
    /**
     * @return mixed
     */
    protected function getEmailMaxLengthViolationMessage()
    {
    }
    protected function getFirstNameMaxLengthViolationMessage()
    {
    }
    protected function getLastNameMaxLengthViolationMessage()
    {
    }
    public function submit()
    {
    }
    public function getTemplateVariables()
    {
    }
}
