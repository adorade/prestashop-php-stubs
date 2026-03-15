<?php

abstract class AbstractFormCore implements \FormInterface
{
    /**
     * @var TranslatorInterface
     */
    protected $translator;
    /**
     * @var ValidateConstraintTranslator
     */
    protected $constraintTranslator;
    /**
     * @var FormFormatterInterface
     */
    protected $formatter;
    protected $action;
    protected $template;
    /**
     * @var array
     */
    protected $formFields = [];
    /**
     * @var array[]
     */
    protected $errors = ['' => []];
    public function __construct(\Smarty $smarty, \Symfony\Contracts\Translation\TranslatorInterface $translator, \FormFormatterInterface $formatter)
    {
    }
    public function getFormatter()
    {
    }
    public function setAction($action)
    {
    }
    public function getAction()
    {
    }
    public function getErrors()
    {
    }
    public function hasErrors()
    {
    }
    abstract public function getTemplateVariables();
    public function setTemplate($template)
    {
    }
    public function getTemplate()
    {
    }
    public function render(array $extraVariables = [])
    {
    }
    public function getProxy()
    {
    }
    public function validate()
    {
    }
    public function fillWith(array $params = [])
    {
    }
    public function getField($field_name)
    {
    }
    public function getValue($field_name)
    {
    }
    public function setValue($field_name, $value)
    {
    }
    /**
     * Validate field length
     *
     * @param FormField $field the field to check
     *
     * @return bool
     */
    protected function checkFieldLength($field)
    {
    }
}
