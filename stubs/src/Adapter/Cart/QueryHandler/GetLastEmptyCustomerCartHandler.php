<?php

namespace PrestaShop\PrestaShop\Adapter\Cart\QueryHandler;

/**
 * Gets last empty cart for customer using legacy object model
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetLastEmptyCustomerCartHandler implements \PrestaShop\PrestaShop\Core\Domain\Cart\QueryHandler\GetLastEmptyCustomerCartHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Cart\Query\GetLastEmptyCustomerCart $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Cart\ValueObject\CartId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Cart\Exception\CartException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Cart\Exception\CartNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Customer\Exception\CustomerNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Cart\Exception\CartConstraintException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Cart\Query\GetLastEmptyCustomerCart $query): \PrestaShop\PrestaShop\Core\Domain\Cart\ValueObject\CartId
    {
    }
}
