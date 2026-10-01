<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider;

/**
 * Provides the data that is used to prefill the Combination form
 */
class CombinationFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\FormDataProviderInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus
     * @param \PrestaShop\PrestaShop\Adapter\Shop\Context $shopContext
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus, \PrestaShop\PrestaShop\Adapter\Shop\Context $shopContext)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function getData($id): array
    {
    }
    /**
     * {@inheritDoc}
     */
    public function getDefaultData(): array
    {
    }
}
