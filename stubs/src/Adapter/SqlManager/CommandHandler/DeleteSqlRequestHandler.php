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
     * @throws \PrestaShop\PrestaShop\Core\Domain\SqlManagement\Exception\CannotDeleteSqlRequestException
     * @throws \PrestaShop\PrestaShop\Core\Domain\SqlManagement\Exception\SqlRequestNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Domain\SqlManagement\Exception\SqlRequestException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SqlManagement\Command\DeleteSqlRequestCommand $command)
    {
    }
}
