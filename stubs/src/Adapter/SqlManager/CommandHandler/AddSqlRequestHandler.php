<?php

namespace PrestaShop\PrestaShop\Adapter\SqlManager\CommandHandler;

/**
 * Class AddSqlRequestHandler handles SqlRequest creation command.
 *
 * @internal
 */
final class AddSqlRequestHandler extends \PrestaShop\PrestaShop\Adapter\SqlManager\CommandHandler\AbstractSqlRequestHandler implements \PrestaShop\PrestaShop\Core\Domain\SqlManagement\CommandHandler\AddSqlRequestHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws CannotAddSqlRequestException
     * @throws SqlRequestException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SqlManagement\Command\AddSqlRequestCommand $command)
    {
    }
}
