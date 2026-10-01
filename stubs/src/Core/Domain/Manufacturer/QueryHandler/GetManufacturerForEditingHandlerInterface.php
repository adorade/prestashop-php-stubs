<?php

namespace PrestaShop\PrestaShop\Core\Domain\Manufacturer\QueryHandler;

/**
 * Defines contract for GetManufacturerForEditingHandler
 */
interface GetManufacturerForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Manufacturer\Query\GetManufacturerForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Manufacturer\QueryResult\EditableManufacturer
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Manufacturer\Query\GetManufacturerForEditing $query);
}
