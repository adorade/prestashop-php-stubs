<?php

namespace PrestaShop\PrestaShop\Core\Grid\Data\Factory;

/**
 * Class CustomerCartGridDataFactoryDecorator decorates data from customer carts doctrine data factory.
 */
final class CustomerCartGridDataFactoryDecorator implements \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface
{
    /**
     * @param GridDataFactoryInterface $customerCartDoctrineGridDataFactory
     * @param \PrestaShop\PrestaShop\Core\Localization\LocaleInterface $locale
     * @param string $contextCurrencyIsoCode
     * @param \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface $customerCartDoctrineGridDataFactory, \PrestaShop\PrestaShop\Core\Localization\LocaleInterface $locale, $contextCurrencyIsoCode, \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria)
    {
    }
}
