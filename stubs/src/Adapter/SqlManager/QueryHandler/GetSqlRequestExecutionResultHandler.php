<?php

namespace PrestaShop\PrestaShop\Adapter\SqlManager\QueryHandler;

/**
 * Class GetSqlRequestExecutionResultHandler.
 *
 * @internal
 */
final class GetSqlRequestExecutionResultHandler implements \PrestaShop\PrestaShop\Core\Domain\SqlManagement\QueryHandler\GetSqlRequestExecutionResultHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws SqlRequestNotFoundException
     * @throws SqlRequestException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SqlManagement\Query\GetSqlRequestExecutionResult $query)
    {
    }
}
