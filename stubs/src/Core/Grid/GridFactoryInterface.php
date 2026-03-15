<?php

namespace PrestaShop\PrestaShop\Core\Grid;

/**
 * Interface GridFactoryInterface exposes contract for grid factory which is responsible for creating Grid instances.
 */
interface GridFactoryInterface
{
    /**
     * Create grid with filtered data.
     *
     * @param SearchCriteriaInterface $searchCriteria
     *
     * @return GridInterface
     */
    public function getGrid(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria);
}
