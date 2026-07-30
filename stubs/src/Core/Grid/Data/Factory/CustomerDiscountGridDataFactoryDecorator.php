<?php

namespace PrestaShop\PrestaShop\Core\Grid\Data\Factory;

/**
 * Class CustomerDiscountGridDataFactoryDecorator decorates data from customer addresses doctrine data factory.
 */
final class CustomerDiscountGridDataFactoryDecorator implements \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface
{
    /**
     * @param GridDataFactoryInterface $customerDiscountDoctrineGridDataFactory
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface $customerDiscountDoctrineGridDataFactory)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria)
    {
    }
}
