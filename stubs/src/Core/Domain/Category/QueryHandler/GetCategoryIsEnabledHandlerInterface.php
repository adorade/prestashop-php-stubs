<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\QueryHandler;

/**
 * Interface for service that handles getting category status.
 */
interface GetCategoryIsEnabledHandlerInterface
{
    /**
     * @param GetCategoryIsEnabled $query
     *
     * @return bool
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Category\Query\GetCategoryIsEnabled $query);
}
