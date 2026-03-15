<?php

namespace PrestaShop\PrestaShop\Core\Domain\Manufacturer\QueryHandler;

/**
 * Interface for service that handles gettting manufacturer for viewing query
 */
interface GetManufacturerForViewingHandlerInterface
{
    /**
     * @param GetManufacturerForViewing $query
     *
     * @return ViewableManufacturer
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Manufacturer\Query\GetManufacturerForViewing $query);
}
