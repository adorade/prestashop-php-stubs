<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler;

class ApiClientFormDataHandler implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\FormDataHandlerInterface
{
    public function __construct(private \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $commandBus)
    {
    }
    public function create(array $data)
    {
    }
    public function update($id, array $data)
    {
    }
}
