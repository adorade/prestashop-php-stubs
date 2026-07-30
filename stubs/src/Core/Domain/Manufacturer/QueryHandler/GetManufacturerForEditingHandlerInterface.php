<?php

namespace PrestaShop\PrestaShop\Core\Domain\Manufacturer\QueryHandler;

/**
 * Defines contract for GetManufacturerForEditingHandler
 */
interface GetManufacturerForEditingHandlerInterface
{
    /**
     * @param GetManufacturerForEditing $query
     *
     * @return EditableManufacturer
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Manufacturer\Query\GetManufacturerForEditing $query);
}
