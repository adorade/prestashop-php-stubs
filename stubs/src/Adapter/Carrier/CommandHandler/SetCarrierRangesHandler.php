<?php

namespace PrestaShop\PrestaShop\Adapter\Carrier\CommandHandler;

/**
 * Handles query which gets carrier range
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class SetCarrierRangesHandler implements \PrestaShop\PrestaShop\Core\Domain\Carrier\CommandHandler\SetCarrierRangesHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Carrier\Repository\CarrierRepository $carrierRepository, private readonly \PrestaShop\PrestaShop\Adapter\Carrier\Repository\CarrierRangeRepository $carrierRangeRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Carrier\Command\SetCarrierRangesCommand $command): \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId
    {
    }
}
