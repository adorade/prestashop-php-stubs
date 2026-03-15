<?php

namespace PrestaShop\PrestaShop\Adapter\SqlManager\CommandHandler;

/**
 * Class EditSqlRequestHandler is responsible for updating SqlRequest.
 *
 * @internal
 */
final class EditSqlRequestHandler extends \PrestaShop\PrestaShop\Adapter\SqlManager\CommandHandler\AbstractSqlRequestHandler implements \PrestaShop\PrestaShop\Core\Domain\SqlManagement\CommandHandler\EditSqlRequestHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @param EditSqlRequestCommand $command
     *
     * @throws CannotEditSqlRequestException
     * @throws SqlRequestException
     * @throws SqlRequestNotFoundException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SqlManagement\Command\EditSqlRequestCommand $command)
    {
    }
}
