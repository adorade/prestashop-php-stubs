<?php

interface CheckoutStepInterface extends \PrestaShop\PrestaShop\Core\Foundation\Templating\RenderableInterface
{
    public function getTitle();
    public function handleRequest(array $requestParameters = []);
    public function setCheckoutProcess(\CheckoutProcess $checkoutProcess);
    public function isReachable();
    public function isComplete();
    public function isCurrent();
    public function getIdentifier();
    public function getDataToPersist();
    public function restorePersistedData(array $data);
    public function getTemplate();
}
