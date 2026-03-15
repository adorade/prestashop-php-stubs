<?php

namespace PrestaShop\PrestaShop\Core\Search\Builder;

/**
 * This builder does not modify the filters but instead saves them in database for
 * each Employee, thus it can then be found by the RepositoryFiltersBuilder.
 */
final class PersistFiltersBuilder extends \PrestaShop\PrestaShop\Core\Search\Builder\AbstractRepositoryFiltersBuilder
{
    /**
     * @param Filters|null $filters
     *
     * @return Filters
     *
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function buildFilters(\PrestaShop\PrestaShop\Core\Search\Filters $filters = null)
    {
    }
}
