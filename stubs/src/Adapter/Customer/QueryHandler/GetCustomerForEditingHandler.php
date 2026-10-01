<?php

namespace PrestaShop\PrestaShop\Adapter\Customer\QueryHandler;

/**
 * Handles command that gets customer for editing
 *
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetCustomerForEditingHandler implements \PrestaShop\PrestaShop\Core\Domain\Customer\QueryHandler\GetCustomerForEditingHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Query\GetCustomerForEditing $query)
    {
    }
}
