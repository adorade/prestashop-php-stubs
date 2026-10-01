<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Grid\Data\Factory;

/**
 * Decorates original grid data and returns modified prices for grid display as well as color option for stock column
 * when it is out of stock.
 */
class ProductLightGridDataFactoryDecorator implements \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface $productGridDataFactory
     * @param \PrestaShop\PrestaShop\Core\Localization\Locale\Repository $localeRepository
     * @param string $contextLocale
     * @param int $defaultCurrencyId
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface $productGridDataFactory, \PrestaShop\PrestaShop\Core\Localization\Locale\Repository $localeRepository, string $contextLocale, int $defaultCurrencyId, bool $stockManagementEnabled)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\Data\GridData
     */
    public function getData(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria)
    {
    }
}
