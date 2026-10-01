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
     * @throws \PrestaShop\PrestaShop\Core\Domain\Address\Exception\AddressException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Address\Exception\AddressNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Customer\Exception\CustomerException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Customer\Exception\CustomerNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Country\Exception\CountryConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Domain\State\Exception\StateConstraintException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Address\Query\GetCustomerAddressForEditing $query): \PrestaShop\PrestaShop\Core\Domain\Address\QueryResult\EditableCustomerAddress
    {
    }
}
