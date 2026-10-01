<?php

namespace PrestaShop\PrestaShop\Adapter\Security\CommandHandler;

/**
 * Class DeleteCustomerSessionHandler
 *
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class DeleteCustomerSessionHandler implements \PrestaShop\PrestaShop\Core\Domain\Security\CommandHandler\DeleteCustomerSessionHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Session\Repository\CustomerSessionRepository $repository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Security\Command\DeleteCustomerSessionCommand $command): void
    {
    }
}
