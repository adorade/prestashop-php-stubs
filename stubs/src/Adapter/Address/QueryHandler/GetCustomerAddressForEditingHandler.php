<?php

namespace PrestaShop\PrestaShop\Adapter\Address\QueryHandler;

/**
 * Handles query which gets customer address for editing
 */
final class GetCustomerAddressForEditingHandler extends \PrestaShop\PrestaShop\Adapter\Address\AbstractCustomerAddressHandler implements \PrestaShop\PrestaShop\Core\Domain\Address\QueryHandler\GetCustomerAddressForEditingHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws AddressException
     * @throws AddressNotFoundException
     * @throws CustomerException
     * @throws CustomerNotFoundException
     * @throws CountryConstraintException
     * @throws StateConstraintException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Address\Query\GetCustomerAddressForEditing $query): \PrestaShop\PrestaShop\Core\Domain\Address\QueryResult\EditableCustomerAddress
    {
    }
}
