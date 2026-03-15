<?php

namespace PrestaShop\PrestaShop\Core\Grid\Data\Factory;

/**
 * Interface GridDataFactoryInterface defines contract for grid data factories.
 */
interface GridDataFactoryInterface
{
    /**
     * @param SearchCriteriaInterface $searchCriteria
     *
     * @return GridData
     */
    public function getData(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria);
}
