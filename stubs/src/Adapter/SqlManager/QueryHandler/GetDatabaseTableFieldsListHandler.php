<?php

namespace PrestaShop\PrestaShop\Adapter\SqlManager\QueryHandler;

/**
 * Class GetDatabaseTableFieldsListHandler.
 *
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetDatabaseTableFieldsListHandler implements \PrestaShop\PrestaShop\Core\Domain\SqlManagement\QueryHandler\GetDatabaseTableFieldsListHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SqlManagement\Query\GetDatabaseTableFieldsList $query)
    {
    }
}
