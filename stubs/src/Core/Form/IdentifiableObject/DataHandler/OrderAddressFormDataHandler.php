<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler;

class OrderAddressFormDataHandler implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\FormDataHandlerInterface
{
    /**
     * @param CommandBusInterface $commandBus
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $commandBus)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function create(array $data)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws CountryConstraintException
     * @throws StateConstraintException
     * @throws InvalidAddressTypeException
     * @throws OrderException
     */
    public function update($orderId, array $data)
    {
    }
}
