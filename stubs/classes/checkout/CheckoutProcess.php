<?php

class CheckoutProcessCore implements \PrestaShop\PrestaShop\Core\Foundation\Templating\RenderableInterface
{
    /** @var Context */
    protected $context;
    /**
     * @param Context $context
     * @param CheckoutSession $checkoutSession
     */
    public function __construct(\Context $context, \CheckoutSession $checkoutSession)
    {
    }
    /**
     * @return string
     */
    public function getTemplate()
    {
    }
    /**
     * @param array $requestParameters
     *
     * @return $this
     */
    public function handleRequest(array $requestParameters = [])
    {
    }
    /**
     * @return CheckoutSession
     */
    public function getCheckoutSession()
    {
    }
    /**
     * @param CheckoutStepInterface $step
     *
     * @return self
     */
    public function addStep(\CheckoutStepInterface $step)
    {
    }
    /**
     * @return AbstractCheckoutStep[]
     */
    public function getSteps()
    {
    }
    /**
     * @param array $steps
     */
    public function setSteps(array $steps)
    {
    }
    /**
     * @param string $templatePath
     *
     * @return $this
     */
    public function setTemplate($templatePath)
    {
    }
    /**
     * @param array $extraParams
     *
     * @return string
     *
     * @throws SmartyException
     */
    public function render(array $extraParams = [])
    {
    }
    /**
     * @param bool $has_errors
     *
     * @return $this
     */
    public function setHasErrors($has_errors = \true)
    {
    }
    /**
     * @return bool
     */
    public function hasErrors()
    {
    }
    public function getDataToPersist()
    {
    }
    public function restorePersistedData(array $data)
    {
    }
    /**
     * @return $this
     */
    public function setNextStepReachable()
    {
    }
    /**
     * @return $this
     */
    public function markCurrentStep()
    {
    }
    /**
     * @return $this
     */
    public function invalidateAllStepsAfterCurrent()
    {
    }
    /**
     * @return CheckoutStepInterface
     *
     * @throws \RuntimeException if no current step is found
     */
    public function getCurrentStep()
    {
    }
}
