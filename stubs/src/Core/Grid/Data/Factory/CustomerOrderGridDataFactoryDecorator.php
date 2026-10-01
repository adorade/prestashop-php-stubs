<?php

namespace PrestaShop\PrestaShop\Core\Grid\Data\Factory;

/**
 * Class CustomerOrderGridDataFactoryDecorator decorates data from customer ordesrs doctrine data factory.
 */
final class CustomerOrderGridDataFactoryDecorator implements \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface
{
    /**
     * @param GridDataFactoryInterface $customerOrderDoctrineGridDataFactory
     * @param \PrestaShop\PrestaShop\Core\Localization\LocaleInterface $locale
     * @param string $contextCurrencyIsoCode
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface $customerOrderDoctrineGridDataFactory, \PrestaShop\PrestaShop\Core\Localization\LocaleInterface $locale, $contextCurrencyIsoCode)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria)
    {
    }
}
