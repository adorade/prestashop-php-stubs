<?php

namespace PrestaShop\PrestaShop\Adapter\Security\CommandHandler;

/**
 * Handles command that deletes employees sessions in bulk action.
 *
 * @internal
 */
final class BulkDeleteEmployeeSessionsHandler implements \PrestaShop\PrestaShop\Core\Domain\Security\CommandHandler\BulkDeleteEmployeeSessionsHandlerInterface
{
    /**
     * @param EmployeeSessionRepository $repository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Session\Repository\EmployeeSessionRepository $repository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Security\Command\BulkDeleteEmployeeSessionsCommand $command): void
    {
    }
}
