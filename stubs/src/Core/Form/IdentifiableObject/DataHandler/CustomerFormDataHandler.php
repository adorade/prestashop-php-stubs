<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler;

/**
 * Saves or updates customer data submitted in form
 */
final class CustomerFormDataHandler implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\FormDataHandlerInterface
{
    /**
     * @param CommandBusInterface $bus
     * @param int $contextShopId
     * @param bool $isB2bFeatureEnabled
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $bus, $contextShopId, $isB2bFeatureEnabled)
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
    public function update($customerId, array $data)
    {
    }
}
