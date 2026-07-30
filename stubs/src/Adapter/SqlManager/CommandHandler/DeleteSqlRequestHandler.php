<?php

namespace PrestaShop\PrestaShop\Adapter\SqlManager\CommandHandler;

/**
 * Class DeleteSqlRequestHandler.
 *
 * @internal
 */
final class DeleteSqlRequestHandler implements \PrestaShop\PrestaShop\Core\Domain\SqlManagement\CommandHandler\DeleteSqlRequestHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws CannotDeleteSqlRequestException
     * @throws SqlRequestNotFoundException
     * @throws SqlRequestException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SqlManagement\Command\DeleteSqlRequestCommand $command)
    {
    }
}
