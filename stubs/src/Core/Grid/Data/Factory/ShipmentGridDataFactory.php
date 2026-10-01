<?php

namespace PrestaShop\PrestaShop\Core\Grid\Data\Factory;

class ShipmentGridDataFactory implements \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface $shipmentDataFactory, private readonly \PrestaShop\PrestaShop\Core\Localization\LocaleInterface $locale, private readonly \PrestaShop\PrestaShop\Core\Context\CurrencyContext $currencyContext, private readonly \PrestaShop\PrestaShop\Adapter\Configuration $configuration)
    {
    }
    public function getData(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria): \PrestaShop\PrestaShop\Core\Grid\Data\GridData
    {
    }
}
