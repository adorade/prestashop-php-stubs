<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\QueryHandler;

/**
 * Interface for handling GetCustomerCarts query
 */
interface GetCustomerCartsHandlerInterface
{
    /**
     * @param GetCustomerCarts $query
     *
     * @return CartSummary[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Query\GetCustomerCarts $query): array;
}
