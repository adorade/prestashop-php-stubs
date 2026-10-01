<?php

namespace PrestaShop\PrestaShop\Core\Domain\Manufacturer\QueryHandler;

/**
 * Interface for service that handles gettting manufacturer for viewing query
 */
interface GetManufacturerForViewingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Manufacturer\Query\GetManufacturerForViewing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Manufacturer\QueryResult\ViewableManufacturer
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Manufacturer\Query\GetManufacturerForViewing $query);
}
