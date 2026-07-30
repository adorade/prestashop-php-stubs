<?php

abstract class AbstractCheckoutStepCore implements \CheckoutStepInterface
{
    protected $step_is_reachable = \false;
    protected $step_is_complete = \false;
    protected $step_is_current = \false;
    protected $context;
    protected $template;
    protected $unreachableStepTemplate = 'checkout/_partials/steps/unreachable.tpl';
    /**
     * @param Context $context
     * @param TranslatorInterface $translator
     */
    public function __construct(\Context $context, \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    public function setTemplate($templatePath)
    {
    }
    public function getTemplate()
    {
    }
    protected function getTranslator()
    {
    }
    protected function renderTemplate($template, array $extraParams = [], array $params = [])
    {
    }
    public function setTitle($title)
    {
    }
    public function getTitle()
    {
    }
    public function setCheckoutProcess(\CheckoutProcess $checkoutProcess)
    {
    }
    public function getCheckoutProcess()
    {
    }
    public function getCheckoutSession()
    {
    }
    public function setReachable($step_is_reachable)
    {
    }
    public function isReachable()
    {
    }
    /**
     * @param bool $step_is_complete
     *
     * @return self
     */
    public function setComplete($step_is_complete)
    {
    }
    public function isComplete()
    {
    }
    public function setCurrent($step_is_current)
    {
    }
    public function isCurrent()
    {
    }
    public function getIdentifier()
    {
    }
    public function getDataToPersist()
    {
    }
    public function restorePersistedData(array $data)
    {
    }
    /**
     * Find next step and mark it as current
     */
    public function setNextStepAsCurrent()
    {
    }
}
