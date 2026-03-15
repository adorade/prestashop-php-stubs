<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider;

/**
 * Provides data for address add/edit form
 */
final class ManufacturerAddressFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\FormDataProviderInterface
{
    /**
     * @param CommandBusInterface $queryBus
     * @param int $defaultCountryId
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus, $defaultCountryId)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws AddressConstraintException
     */
    public function getData($addressId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getDefaultData()
    {
    }
}
