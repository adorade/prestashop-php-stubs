<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\QueryHandler;

/**
 * Interface for handling GetLastEmptyCustomerCart query
 */
interface GetLastEmptyCustomerCartHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Cart\Query\GetLastEmptyCustomerCart $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Cart\ValueObject\CartId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Cart\Query\GetLastEmptyCustomerCart $query): \PrestaShop\PrestaShop\Core\Domain\Cart\ValueObject\CartId;
}
