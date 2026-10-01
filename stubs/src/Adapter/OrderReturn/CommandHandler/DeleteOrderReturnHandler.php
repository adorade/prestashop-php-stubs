<?php

namespace PrestaShop\PrestaShop\Adapter\OrderReturn\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class DeleteOrderReturnHandler implements \PrestaShop\PrestaShop\Core\Domain\OrderReturn\CommandHandler\DeleteOrderReturnHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\OrderReturn\Repository\OrderReturnRepository $orderReturnRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderReturn\Command\DeleteOrderReturnCommand $command): void
    {
    }
}
