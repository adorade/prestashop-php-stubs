<?php

namespace PrestaShop\PrestaShop\Adapter\OrderReturn\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class DeleteProductFromOrderReturnHandler implements \PrestaShop\PrestaShop\Core\Domain\OrderReturn\CommandHandler\DeleteProductFromOrderReturnHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\OrderReturn\Repository\OrderReturnRepository $orderReturnRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderReturn\Command\DeleteProductFromOrderReturnCommand $command): void
    {
    }
}
