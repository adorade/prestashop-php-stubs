<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider;

class EditProductFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\FormDataProviderInterface
{
    public function __construct(private \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus, private \PrestaShop\PrestaShop\Adapter\Currency\CurrencyDataProvider $currencyDataProvider, private \PrestaShop\PrestaShop\Core\FeatureFlag\FeatureFlagStateCheckerInterface $featureFlagStateChecker)
    {
    }
    public function getData($orderId)
    {
    }
    public function getDefaultData()
    {
    }
}
