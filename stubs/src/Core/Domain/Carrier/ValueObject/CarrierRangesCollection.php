<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject;

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
}
