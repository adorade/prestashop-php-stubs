<?php

namespace PrestaShop\PrestaShop\Core\Grid\Data\Factory;

/**
 * Interface GridDataFactoryInterface defines contract for grid data factories.
 */
interface GridDataFactoryInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\Data\GridData
     */
    public function getData(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria);
}
