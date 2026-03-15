<?php

namespace PrestaShop\PrestaShop\Core\Domain\SqlManagement\QueryHandler;

/**
 * Class GetSqlRequestSettingsHandler handles query to get SqlRequest settings.
 */
final class GetSqlRequestSettingsHandler implements \PrestaShop\PrestaShop\Core\Domain\SqlManagement\QueryHandler\GetSqlRequestSettingsHandlerInterface
{
    /**
     * @param ConfigurationInterface $configuration
     */
    public function __construct(\PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SqlManagement\Query\GetSqlRequestSettings $query)
    {
    }
}
