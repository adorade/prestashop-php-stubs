<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\QueryHandler;

/**
 * Interface for service that gets cart for viewing
 */
interface GetCartForViewingHandlerInterface
{
    /**
     * @param GetCartForViewing $query
     *
     * @return CartView
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Cart\Query\GetCartForViewing $query);
}
