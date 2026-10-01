<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\QueryHandler;

/**
 * Interface for service that gets cart for viewing
 */
interface GetCartForViewingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Cart\Query\GetCartForViewing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Cart\QueryResult\CartView
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Cart\Query\GetCartForViewing $query);
}
