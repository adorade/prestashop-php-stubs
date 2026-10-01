<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler;

/**
 * Saves or updates order return state data submitted in form
 */
final class OrderReturnStateFormDataHandler implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\FormDataHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $bus)
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
     */
    public function update($orderReturnStateId, array $data)
    {
    }
}
