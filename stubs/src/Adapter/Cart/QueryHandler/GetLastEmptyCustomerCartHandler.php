<?php

namespace PrestaShop\PrestaShop\Adapter\Cart\QueryHandler;

/**
 * Gets last empty cart for customer using legacy object model
 */
final class GetLastEmptyCustomerCartHandler implements \PrestaShop\PrestaShop\Core\Domain\Cart\QueryHandler\GetLastEmptyCustomerCartHandlerInterface
{
    /**
     * @param GetLastEmptyCustomerCart $query
     *
     * @return CartId
     *
     * @throws CartException
     * @throws CartNotFoundException
     * @throws CustomerNotFoundException
     * @throws CartConstraintException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Cart\Query\GetLastEmptyCustomerCart $query): \PrestaShop\PrestaShop\Core\Domain\Cart\ValueObject\CartId
    {
    }
}
