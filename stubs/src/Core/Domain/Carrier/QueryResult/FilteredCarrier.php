<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\QueryResult;

/**
 * Model representing carriers that have been removed, along with the products responsible for their removal.
 */
class FilteredCarrier
{
    public function __construct(array $products, \PrestaShop\PrestaShop\Core\Domain\Carrier\QueryResult\CarrierSummary $carrier)
    {
    }
    /**
     * @return ProductSummary[]
     */
    public function getProducts(): array
    {
    }
    public function getCarrier(): \PrestaShop\PrestaShop\Core\Domain\Carrier\QueryResult\CarrierSummary
    {
    }
}
