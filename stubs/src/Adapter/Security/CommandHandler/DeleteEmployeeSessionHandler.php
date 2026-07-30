<?php

namespace PrestaShop\PrestaShop\Adapter\Security\CommandHandler;

/**
 * Class DeleteEmployeeSessionHandler
 *
 * @internal
 */
final class DeleteEmployeeSessionHandler implements \PrestaShop\PrestaShop\Core\Domain\Security\CommandHandler\DeleteEmployeeSessionHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Session\Repository\EmployeeSessionRepository $repository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Security\Command\DeleteEmployeeSessionCommand $command): void
    {
    }
}
