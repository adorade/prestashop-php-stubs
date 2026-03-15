<?php

namespace PrestaShop\PrestaShop\Core\Grid\Data\Factory;

/**
 * Class CustomerDiscountGridDataFactory is responsible of returning grid data for customer's discounts.
 */
final class CustomerDiscountGridDataFactory implements \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface
{
    /**
     * @param Customer $customer
     */
    public function __construct(\Customer $customer)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria)
    {
    }
}
