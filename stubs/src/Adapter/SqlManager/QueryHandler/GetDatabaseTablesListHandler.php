<?php

namespace PrestaShop\PrestaShop\Adapter\SqlManager\QueryHandler;

/**
 * Class GetDatabaseTablesListHandler.
 *
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetDatabaseTablesListHandler implements \PrestaShop\PrestaShop\Core\Domain\SqlManagement\QueryHandler\GetDatabaseTablesListHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SqlManagement\Query\GetDatabaseTablesList $query)
    {
    }
}
