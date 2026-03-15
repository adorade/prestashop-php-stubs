<?php

namespace PrestaShop\PrestaShop\Core\Domain\Address\QueryHandler;

/**
 * Interface for services that handles query which gets manufacturer address for editing
 */
interface GetManufacturerAddressForEditingHandlerInterface
{
    /**
     * @param GetManufacturerAddressForEditing $query
     *
     * @return EditableManufacturerAddress
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Address\Query\GetManufacturerAddressForEditing $query);
}
