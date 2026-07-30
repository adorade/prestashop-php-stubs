<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\QueryHandler;

/**
 * Interface for handling GetLastEmptyCustomerCart query
 */
interface GetLastEmptyCustomerCartHandlerInterface
{
    /**
     * @param GetLastEmptyCustomerCart $query
     *
     * @return CartId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Cart\Query\GetLastEmptyCustomerCart $query): \PrestaShop\PrestaShop\Core\Domain\Cart\ValueObject\CartId;
}
