<?php

namespace PrestaShop\PrestaShop\Core\Domain\Address\QueryHandler;

/**
 * Interface for services that handles query which gets customer address for editing
 */
interface GetCustomerAddressForEditingHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Address\Query\GetCustomerAddressForEditing $query
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Address\QueryResult\EditableCustomerAddress
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Address\Query\GetCustomerAddressForEditing $query): \PrestaShop\PrestaShop\Core\Domain\Address\QueryResult\EditableCustomerAddress;
}
