<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler;

/**
 * Saves or updates customer data submitted in form
 */
final class CustomerFormDataHandler implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\FormDataHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $bus
     * @param int $contextShopId
     * @param bool $isB2bFeatureEnabled
     * @param \PrestaShop\PrestaShop\Core\Group\Provider\DefaultGroupsProviderInterface $defaultGroupsProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $bus, $contextShopId, $isB2bFeatureEnabled, \PrestaShop\PrestaShop\Core\Group\Provider\DefaultGroupsProviderInterface $defaultGroupsProvider)
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
