<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler;

class AliasFormDataHandler implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\FormDataHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $commandBus)
    {
    }
    public function create(array $data)
    {
    }
    public function update($id, array $data)
    {
    }
    protected function formatAliases(array $aliases)
    {
    }
}
