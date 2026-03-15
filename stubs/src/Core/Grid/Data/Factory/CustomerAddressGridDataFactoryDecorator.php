<?php

namespace PrestaShop\PrestaShop\Core\Grid\Data\Factory;

/**
 * Class CustomerAddressGridDataFactoryDecorator decorates data from customer addresses doctrine data factory.
 */
final class CustomerAddressGridDataFactoryDecorator implements \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface
{
    /**
     * @param GridDataFactoryInterface $customerAddressDoctrineGridDataFactory
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface $customerAddressDoctrineGridDataFactory)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria)
    {
    }
}
