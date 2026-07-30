<?php

namespace PrestaShop\PrestaShop\Core\Domain\CustomerService\CommandHandler;

/**
 * @internal
 */
class UpdateCustomerThreadStatusHandler implements \PrestaShop\PrestaShop\Core\Domain\CustomerService\CommandHandler\UpdateCustomerThreadStatusHandlerInterface
{
    /**
     * @param Connection $connection
     * @param string $dbPrefix
     */
    public function __construct(\Doctrine\DBAL\Driver\Connection $connection, $dbPrefix)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\CustomerService\Command\UpdateCustomerThreadStatusCommand $command)
    {
    }
}
