<?php

namespace PrestaShop\PrestaShop\Adapter\Customer\CommandHandler;

/**
 * Handles command that deletes customers in bulk action.
 *
 * @internal
 */
final class BulkDeleteCustomerHandler extends \PrestaShop\PrestaShop\Adapter\Customer\CommandHandler\AbstractCustomerHandler implements \PrestaShop\PrestaShop\Core\Domain\Customer\CommandHandler\BulkDeleteCustomerHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Command\BulkDeleteCustomerCommand $command)
    {
    }
}
