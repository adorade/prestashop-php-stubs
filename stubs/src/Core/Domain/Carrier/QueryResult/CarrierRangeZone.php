<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\QueryResult;

/**
 * Carrier Range Zone
 */
class CarrierRangeZone
{
    public function __construct(
        private int $zoneId,
        /* @var array{
         *     range_from: float,
         *     range_to: float,
         *     range_price: string,
         * }[] $ranges,
         */
        array $ranges
    )
    {
    }
    public function getZoneId(): int
    {
    }
    /**
     * @return CarrierRangePrice[]
     */
    public function getRanges(): array
    {
    }
}
