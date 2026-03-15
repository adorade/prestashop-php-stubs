<?php

namespace PrestaShop\PrestaShop\Core\Grid\Data\Factory;

/**
 * Class CustomerGridDataFactoryDecorator decorates data from customer doctrine data factory.
 */
final class CustomerGridDataFactoryDecorator implements \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface
{
    /**
     * @param GridDataFactoryInterface $customerDoctrineGridDataFactory
     * @param LocaleInterface $locale
     * @param string $contextCurrencyIsoCode
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface $customerDoctrineGridDataFactory, \PrestaShop\PrestaShop\Core\Localization\LocaleInterface $locale, $contextCurrencyIsoCode)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria)
    {
    }
}
