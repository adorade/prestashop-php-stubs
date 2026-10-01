<?php

namespace PrestaShop\PrestaShop\Adapter\OrderReturn\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class UpdateOrderReturnStateHandler implements \PrestaShop\PrestaShop\Core\Domain\OrderReturn\CommandHandler\UpdateOrderReturnStateHandlerInterface
{
    /**
     * UpdateOrderReturnStateHandler constructor.
     *
     * @param \PrestaShop\PrestaShop\Adapter\OrderReturn\Repository\OrderReturnRepository $orderReturnRepository
     * @param \PrestaShop\PrestaShop\Adapter\OrderReturnState\Repository\OrderReturnStateRepository $orderReturnStateRepository
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\OrderReturn\Repository\OrderReturnRepository $orderReturnRepository, \PrestaShop\PrestaShop\Adapter\OrderReturnState\Repository\OrderReturnStateRepository $orderReturnStateRepository, \Symfony\Contracts\Translation\TranslatorInterface $translator)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\OrderReturn\Command\UpdateOrderReturnStateCommand $command): void
    {
    }
}
