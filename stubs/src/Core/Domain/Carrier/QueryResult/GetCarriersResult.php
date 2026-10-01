<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\QueryResult;

/**
 * Model returning available carriers as well as carriers that have been removed.
 */
class GetCarriersResult
{
    public function __construct(array $availableCarriers, array $filteredCarrier)
    {
    }
    /**
     * @return CarrierSummary[]
     */
    public function getAvailableCarriers(): array
    {
    }
    /**
     * @return FilteredCarrier[]
     */
    public function getFilteredOutCarriers(): array
    {
    }
    /**
     * @return array<int, array{id: int, name: string}>
     */
    public function getAvailableCarriersToArray(): array
    {
    }
}
