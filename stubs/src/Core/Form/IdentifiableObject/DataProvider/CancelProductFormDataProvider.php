<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider;

/**
 * Provides data for product cancellation form in order page
 */
final class CancelProductFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\FormDataProviderInterface
{
    /**
     * @param CommandBusInterface $queryBus
     * @param CurrencyDataProviderInterface $currencyDataProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus, \PrestaShop\PrestaShop\Core\Currency\CurrencyDataProviderInterface $currencyDataProvider)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData($orderId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getDefaultData()
    {
    }
}
