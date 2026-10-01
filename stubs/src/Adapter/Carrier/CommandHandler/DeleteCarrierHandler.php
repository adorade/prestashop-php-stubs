<?php

namespace PrestaShop\PrestaShop\Adapter\Carrier\CommandHandler;

/**
 * Handles command that deletes carrier
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class DeleteCarrierHandler implements \PrestaShop\PrestaShop\Core\Domain\Carrier\CommandHandler\DeleteCarrierHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Carrier\Repository\CarrierRepository $carrierRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Carrier\Command\DeleteCarrierCommand $command)
    {
    }
}
