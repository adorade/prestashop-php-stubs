<?php

namespace PrestaShop\PrestaShop\Adapter\Security\CommandHandler;

/**
 * Class ClearOutdatedEmployeeSessionHandler
 *
 * @internal
 */
class ClearOutdatedEmployeeSessionHandler implements \PrestaShop\PrestaShop\Core\Domain\Security\CommandHandler\ClearOutdatedEmployeeSessionHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Session\Repository\EmployeeSessionRepository $repository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Security\Command\ClearOutdatedEmployeeSessionCommand $command): void
    {
    }
}
