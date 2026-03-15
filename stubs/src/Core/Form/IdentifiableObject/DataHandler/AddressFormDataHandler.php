<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler;

/**
 * Handles submitted address form data
 */
final class AddressFormDataHandler implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\FormDataHandlerInterface
{
    /**
     * @param CommandBusInterface $commandBus
     * @param CustomerDataProvider $customerDataProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $commandBus, \PrestaShop\PrestaShop\Adapter\Customer\CustomerDataProvider $customerDataProvider)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws CountryConstraintException
     * @throws StateConstraintException
     */
    public function create(array $data)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws AddressConstraintException
     * @throws CountryConstraintException
     * @throws StateConstraintException
     */
    public function update($addressId, array $data)
    {
    }
}
