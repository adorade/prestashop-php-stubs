<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\QueryHandler;

/**
 * Describes get carrier ranges handler.
 */
interface GetCarrierRangesHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Carrier\Query\GetCarrierRanges $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Carrier\QueryResult\CarrierRangesCollection
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Carrier\Query\GetCarrierRanges $query): \PrestaShop\PrestaShop\Core\Domain\Carrier\QueryResult\CarrierRangesCollection;
}
