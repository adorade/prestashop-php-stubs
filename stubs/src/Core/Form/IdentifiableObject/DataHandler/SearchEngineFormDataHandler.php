<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler;

/**
 * Handles submitted search engine form data.
 */
final class SearchEngineFormDataHandler implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\FormDataHandlerInterface
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
    public function create(array $data): int
    {
    }
    /**
     * {@inheritdoc}
     */
    public function update($id, array $data): void
    {
    }
}
