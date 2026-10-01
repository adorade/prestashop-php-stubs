<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\QueryHandler;

/**
 * Interface for handling GetCustomerCarts query
 */
interface GetCustomerCartsHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Customer\Query\GetCustomerCarts $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Customer\QueryResult\CartSummary[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Query\GetCustomerCarts $query): array;
}
