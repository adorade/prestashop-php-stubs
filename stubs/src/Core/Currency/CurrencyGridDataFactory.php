<?php

namespace PrestaShop\PrestaShop\Core\Currency;

/**
 * Class CurrencyGridDataFactory is responsible for providing modified currency list grid data.
 */
final class CurrencyGridDataFactory implements \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface
{
    /**
     * CurrencyGridDataFactory constructor.
     *
     * @param GridDataFactoryInterface $gridDataFactory
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface $gridDataFactory)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria)
    {
    }
}
