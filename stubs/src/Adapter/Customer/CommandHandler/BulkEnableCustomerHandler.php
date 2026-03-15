<?php

namespace PrestaShop\PrestaShop\Adapter\Customer\CommandHandler;

/**
 * Handles command which enables given customers.
 *
 * @internal
 */
final class BulkEnableCustomerHandler extends \PrestaShop\PrestaShop\Adapter\Customer\CommandHandler\AbstractCustomerHandler implements \PrestaShop\PrestaShop\Core\Domain\Customer\CommandHandler\BulkEnableCustomerHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Customer\Command\BulkEnableCustomerCommand $command)
    {
    }
}
