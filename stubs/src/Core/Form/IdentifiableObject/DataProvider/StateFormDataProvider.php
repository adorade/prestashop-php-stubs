<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider;

/**
 * Provides data for state add/edit form
 */
class StateFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\FormDataProviderInterface
{
    /**
     * @param CommandBusInterface $queryBus
     * @param int $defaultCountryId
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus, int $defaultCountryId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData($stateId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getDefaultData()
    {
    }
}
