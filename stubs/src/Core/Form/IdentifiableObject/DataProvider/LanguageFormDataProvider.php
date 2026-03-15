<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider;

/**
 * Provides data for language's add/edit forms
 */
final class LanguageFormDataProvider implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataProvider\FormDataProviderInterface
{
    /**
     * @param CommandBusInterface $bus
     * @param bool $isMultistoreFeatureActive
     * @param int[] $defaultShopAssociation
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $bus, $isMultistoreFeatureActive, array $defaultShopAssociation)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData($languageId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getDefaultData()
    {
    }
}
