<?php

namespace PrestaShop\PrestaShop\Adapter\AttributeGroup;

/**
 * Provides data required for attribute group view action using legacy object models
 */
final class AttributeGroupViewDataProvider implements \PrestaShop\PrestaShop\Core\AttributeGroup\AttributeGroupViewDataProviderInterface
{
    /**
     * @param int $contextLangId
     * @param ConfigurationInterface $configuration
     */
    public function __construct($contextLangId, \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function isColorGroup($attributeGroupId)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getAttributeGroupNameById($attributeGroupId)
    {
    }
}
