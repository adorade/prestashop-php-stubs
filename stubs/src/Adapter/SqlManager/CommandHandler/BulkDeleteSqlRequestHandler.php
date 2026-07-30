<?php

namespace PrestaShop\PrestaShop\Adapter\SqlManager\CommandHandler;

/**
 * Class BulkDeleteSqlRequestHandler handles bulk delete of SqlRequest command.
 */
final class BulkDeleteSqlRequestHandler implements \PrestaShop\PrestaShop\Core\Domain\SqlManagement\CommandHandler\BulkDeleteSqlRequestHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws SqlRequestException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SqlManagement\Command\BulkDeleteSqlRequestCommand $command)
    {
    }
}
