<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler;

/**
 * Handles submitted zone form data.
 */
class CountryFormDataHandler implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\FormDataHandlerInterface
{
    /**
     * @var \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface
     */
    protected $commandBus;
    /**
     * @param \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $commandBus
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $commandBus)
    {
    }
    /**
     * Create object from form data.
     *
     * @param array $data
     *
     * @return int
     */
    public function create(array $data): int
    {
    }
    public function update($id, array $data)
    {
    }
}
