<?php

namespace PrestaShop\PrestaShop\Adapter\SqlManager\QueryHandler;

/**
 * Class GetSqlRequestForEditingHandler.
 *
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetSqlRequestForEditingHandler implements \PrestaShop\PrestaShop\Core\Domain\SqlManagement\QueryHandler\GetSqlRequestForEditingHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\SqlManagement\Exception\SqlRequestException
     * @throws \PrestaShop\PrestaShop\Core\Domain\SqlManagement\Exception\SqlRequestNotFoundException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SqlManagement\Query\GetSqlRequestForEditing $query)
    {
    }
}
