<?php

namespace PrestaShop\PrestaShop\Core\Form\ChoiceProvider;

/**
 * Provides choices for configuring required fields for customer
 */
final class CustomerAddressesChoiceProvider implements \PrestaShop\PrestaShop\Core\Form\ConfigurableFormChoiceProviderInterface
{
    /**
     * @param CustomerDataProvider $customerDataProvider
     * @param int $langId
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Customer\CustomerDataProvider $customerDataProvider, int $langId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getChoices(array $options)
    {
    }
}
