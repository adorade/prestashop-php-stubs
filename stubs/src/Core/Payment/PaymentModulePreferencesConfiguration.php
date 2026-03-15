<?php

namespace PrestaShop\PrestaShop\Core\Payment;

/**
 * Class PaymentModulePreferencesConfiguration is responsible for configuring payment module restrictions.
 */
final class PaymentModulePreferencesConfiguration implements \PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface
{
    /**
     * @param PaymentModuleListProviderInterface $paymentModuleProvider
     * @param PaymentRestrictionsConfiguratorInterface $paymentRestrictionsConfigurator
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Module\DataProvider\PaymentModuleListProviderInterface $paymentModuleProvider, \PrestaShop\PrestaShop\Core\Module\Configuration\PaymentRestrictionsConfiguratorInterface $paymentRestrictionsConfigurator)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getConfiguration()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function updateConfiguration(array $config)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function validateConfiguration(array $config)
    {
    }
}
