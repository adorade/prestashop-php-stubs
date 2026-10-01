<?php

namespace PrestaShop\PrestaShop\Adapter\Carrier\QueryHandler;

/**
 * Handles query which gets carrier range
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
final class GetCarrierRangesHandler implements \PrestaShop\PrestaShop\Core\Domain\Carrier\QueryHandler\GetCarrierRangesHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Carrier\Repository\CarrierRangeRepository $carrierRangeRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Carrier\Query\GetCarrierRanges $query): \PrestaShop\PrestaShop\Core\Domain\Carrier\QueryResult\CarrierRangesCollection
    {
    }
}
