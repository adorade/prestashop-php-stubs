<?php

namespace PrestaShopBundle\Form\Admin\Improve\Payment\Preferences;

/**
 * Class PaymentPreferencesFormDataProvider is responsible for handling "Improve > Payment > Preferences" form data.
 */
final class PaymentPreferencesFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\FormDataProviderInterface
{
    /**
     * @param DataConfigurationInterface $paymentModulePreferencesConfiguration
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface $paymentModulePreferencesConfiguration)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setData(array $data)
    {
    }
}
