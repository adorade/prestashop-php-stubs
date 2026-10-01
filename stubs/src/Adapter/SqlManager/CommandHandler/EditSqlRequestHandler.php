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
     * @param \PrestaShop\PrestaShop\Core\Domain\SqlManagement\Command\EditSqlRequestCommand $command
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\SqlManagement\Exception\CannotEditSqlRequestException
     * @throws \PrestaShop\PrestaShop\Core\Domain\SqlManagement\Exception\SqlRequestException
     * @throws \PrestaShop\PrestaShop\Core\Domain\SqlManagement\Exception\SqlRequestNotFoundException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\SqlManagement\Command\EditSqlRequestCommand $command)
    {
    }
}
