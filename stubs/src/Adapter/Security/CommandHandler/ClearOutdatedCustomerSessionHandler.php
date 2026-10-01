<?php

namespace PrestaShop\PrestaShop\Adapter\Security\CommandHandler;

/**
 * Class ClearOutdatedCustomerSessionHandler
 *
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class ClearOutdatedCustomerSessionHandler implements \PrestaShop\PrestaShop\Core\Domain\Security\CommandHandler\ClearOutdatedCustomerSessionHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Session\Repository\CustomerSessionRepository $repository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Security\Command\ClearOutdatedCustomerSessionCommand $command): void
    {
    }
}
