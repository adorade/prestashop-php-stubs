<?php

namespace PrestaShop\PrestaShop\Core\Grid\Search\Factory;

/**
 * Interface DecoratedSearchCriteriaFactory defines contract for decorated search criteria factory.
 */
interface DecoratedSearchCriteriaFactory
{
    /**
     * Create new search criteria.
     *
     * @param SearchCriteriaInterface $searchCriteria
     *
     * @return SearchCriteriaInterface
     */
    public function createFrom(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria);
}
