<?php

namespace PrestaShop\PrestaShop\Core\Grid\Data\Factory;

/**
 * Gets data for cart grid
 */
class CartGridDataFactory implements \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface
{
    public function __construct(protected readonly \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface $cartDataFactory, protected readonly \PrestaShopBundle\Translation\TranslatorInterface $translator, protected readonly \PrestaShop\PrestaShop\Core\Localization\LocaleInterface $locale, protected readonly \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus, protected readonly \PrestaShop\PrestaShop\Core\Context\CurrencyContext $currencyContext)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria)
    {
    }
}
