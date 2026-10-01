<?php

namespace PrestaShop\PrestaShop\Core\Domain\Address\QueryHandler;

/**
 * Interface for services that handles query which gets manufacturer address for editing
 */
interface GetManufacturerAddressForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Address\Query\GetManufacturerAddressForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Address\QueryResult\EditableManufacturerAddress
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Address\Query\GetManufacturerAddressForEditing $query);
}
