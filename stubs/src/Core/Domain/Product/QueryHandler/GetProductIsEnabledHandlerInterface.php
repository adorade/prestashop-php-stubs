<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\QueryHandler;

/**
 * Interface for service that handles getting product status.
 */
interface GetProductIsEnabledHandlerInterface
{
    /**
     * @param GetProductIsEnabled $query
     *
     * @return bool
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Query\GetProductIsEnabled $query);
}
