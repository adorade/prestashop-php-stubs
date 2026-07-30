<?php

namespace PrestaShop\PrestaShop\Adapter\Security\CommandHandler;

/**
 * Handles command that deletes customers sessions in bulk action.
 *
 * @internal
 */
final class BulkDeleteCustomerSessionsHandler implements \PrestaShop\PrestaShop\Core\Domain\Security\CommandHandler\BulkDeleteCustomerSessionsHandlerInterface
{
    /**
     * @param CustomerSessionRepository $repository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Session\Repository\CustomerSessionRepository $repository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Security\Command\BulkDeleteCustomerSessionsCommand $command): void
    {
    }
}
