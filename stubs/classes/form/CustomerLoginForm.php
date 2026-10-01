<?php

class CustomerLoginFormCore extends \AbstractForm
{
    protected $template = 'customer/_partials/login-form.tpl';
    public function __construct(\Smarty $smarty, \Context $context, \Symfony\Contracts\Translation\TranslatorInterface $translator, \CustomerLoginFormatter $formatter, array $urls)
    {
    }
    public function submit()
    {
    }
    public function fillWith(array $params = [])
    {
    }
    public function getTemplateVariables()
    {
    }
}
