<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler;

class ProductImageFormDataHandler implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\FormDataHandlerInterface
{
    /**
     * @param CommandBusInterface $bus
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $bus)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function create(array $data)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function update($id, array $data)
    {
    }
}
