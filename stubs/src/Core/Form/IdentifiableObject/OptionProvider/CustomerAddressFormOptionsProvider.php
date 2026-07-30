<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\OptionProvider;

/**
 * Provide dynamic complex options to the address type (like preview data that depend
 * on address current data, or specific options for inputs that are deep in the form
 * structure).
 */
class CustomerAddressFormOptionsProvider implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\OptionProvider\FormOptionsProviderInterface
{
    /**
     * @param CommandBusInterface $queryBus
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function getOptions(int $id, array $data): array
    {
    }
    /**
     * {@inheritDoc}
     */
    public function getDefaultOptions(array $data): array
    {
    }
}
