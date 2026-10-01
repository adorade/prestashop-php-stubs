<?php

namespace PrestaShop\PrestaShop\Adapter\Carrier\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class ToggleCarrierIsFreeHandler implements \PrestaShop\PrestaShop\Core\Domain\Carrier\CommandHandler\ToggleCarrierIsFreeHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Carrier\Repository\CarrierRepository $carrierRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Carrier\Command\ToggleCarrierIsFreeCommand $command)
    {
    }
}
