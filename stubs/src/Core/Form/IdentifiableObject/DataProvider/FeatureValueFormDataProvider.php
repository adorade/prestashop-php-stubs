<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider;

class FeatureValueFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\FormDataProviderInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData($id): array
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getDefaultData(): array
    {
    }
}
