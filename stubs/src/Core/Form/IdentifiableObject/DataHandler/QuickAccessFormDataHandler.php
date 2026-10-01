<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler;

final class QuickAccessFormDataHandler implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\FormDataHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $commandBus)
    {
    }
    public function create(array $data): int
    {
    }
    public function update($id, array $data): void
    {
    }
}
