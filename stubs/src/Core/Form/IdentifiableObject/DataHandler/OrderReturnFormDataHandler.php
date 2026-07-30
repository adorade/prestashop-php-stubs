<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler;

/**
 * Saves or updates order return data submitted in form
 */
class OrderReturnFormDataHandler implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\FormDataHandlerInterface
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
    public function update($orderReturnId, array $data): void
    {
    }
    /**
     * Order Return doesn't have a create option
     *
     * @param array $data
     *
     * @throws NotImplementedException
     */
    public function create(array $data): void
    {
    }
}
