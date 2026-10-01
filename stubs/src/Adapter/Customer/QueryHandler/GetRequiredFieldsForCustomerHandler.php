<?php

namespace PrestaShop\PrestaShop\Adapter\Customer\QueryHandler;

/**
 * Handles query which gets required fields for customer sign up
 *
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetRequiredFieldsForCustomerHandler implements \PrestaShop\PrestaShop\Core\Domain\Customer\QueryHandler\GetRequiredFieldsForCustomerHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Query\GetRequiredFieldsForCustomer $query)
    {
    }
}
