<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler;

class SpecificPriceFormDataHandler implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\FormDataHandlerInterface
{
    /**
     * @param CommandBusInterface $commandBus
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $commandBus)
    {
    }
    public function create(array $data): int
    {
    }
    public function update($id, array $data): void
    {
    }
}
