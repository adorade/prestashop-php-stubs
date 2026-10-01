<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\QueryResult;

class CarrierRangesCollection
{
    public function __construct(
        /* @var array{
         *     id_zone: int,
         *     range_from: float,
         *     range_to: float,
         *     range_price: string,
         * }[] $carrierRanges,
         */
        array $carrierRanges
    )
    {
    }
    /**
     * @return CarrierRangeZone[]
     */
    public function getZones(): array
    {
    }
    /**
     * @return int[]
     */
    public function getZonesIds(): array
    {
    }
}
