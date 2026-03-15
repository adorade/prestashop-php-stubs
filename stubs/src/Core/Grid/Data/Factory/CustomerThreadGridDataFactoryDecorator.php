<?php

namespace PrestaShop\PrestaShop\Core\Grid\Data\Factory;

/**
 * Class decorates data from customer thread doctrine data factory by adding colors for status inputs.
 */
final class CustomerThreadGridDataFactoryDecorator implements \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface
{
    /**
     * @param GridDataFactoryInterface $customerDoctrineGridDataFactory
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface $customerDoctrineGridDataFactory)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria): \PrestaShop\PrestaShop\Core\Grid\Data\GridData
    {
    }
}
