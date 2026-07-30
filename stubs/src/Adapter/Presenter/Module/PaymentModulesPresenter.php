<?php

namespace PrestaShop\PrestaShop\Adapter\Presenter\Module;

/**
 * Class PaymentModulesPresenter is responsible for presenting payment modules.
 */
class PaymentModulesPresenter
{
    /**
     * @param PresenterInterface $modulePresenter
     * @param PaymentModuleListProvider $paymentModuleListProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Presenter\PresenterInterface $modulePresenter, \PrestaShop\PrestaShop\Adapter\Module\PaymentModuleListProvider $paymentModuleListProvider)
    {
    }
    /**
     * Get presented payment modules.
     *
     * @return array
     */
    public function present(): array
    {
    }
}
