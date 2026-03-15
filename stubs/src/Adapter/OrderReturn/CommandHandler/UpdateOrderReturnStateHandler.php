<?php

namespace PrestaShop\PrestaShop\Adapter\OrderReturn\CommandHandler;

class UpdateOrderReturnStateHandler implements \PrestaShop\PrestaShop\Core\Domain\OrderReturn\CommandHandler\UpdateOrderReturnStateHandlerInterface
{
    /**
     * UpdateOrderReturnStateHandler constructor.
     *
     * @param OrderReturnRepository $orderReturnRepository
     * @param OrderReturnStateRepository $orderReturnStateRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\OrderReturn\Repository\OrderReturnRepository $orderReturnRepository, \PrestaShop\PrestaShop\Adapter\OrderReturnState\Repository\OrderReturnStateRepository $orderReturnStateRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderReturn\Command\UpdateOrderReturnStateCommand $command): void
    {
    }
}
