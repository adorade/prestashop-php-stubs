<?php

namespace PrestaShop\PrestaShop\Core\SqlManager\Configuration;

/**
 * Class RequestSqlConfiguration is responsible for RequestSql configuration.
 */
final class SqlRequestConfiguration implements \PrestaShop\PrestaShop\Core\Configuration\DataConfigurationInterface
{
    /**
     * @param CommandBusInterface $commandBus
     * @param CommandBusInterface $queryBus
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $commandBus, \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getConfiguration()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function updateConfiguration(array $configuration)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function validateConfiguration(array $configuration)
    {
    }
}
