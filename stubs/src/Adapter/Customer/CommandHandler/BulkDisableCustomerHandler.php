<?php

namespace PrestaShop\PrestaShop\Adapter\Customer\CommandHandler;

/**
 * Handles command that disables customers in bulk action.
 *
 * @internal
 */
final class BulkDisableCustomerHandler extends \PrestaShop\PrestaShop\Adapter\Customer\CommandHandler\AbstractCustomerHandler implements \PrestaShop\PrestaShop\Core\Domain\Customer\CommandHandler\BulkDisableCustomerHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Command\BulkDisableCustomerCommand $command)
    {
    }
}
