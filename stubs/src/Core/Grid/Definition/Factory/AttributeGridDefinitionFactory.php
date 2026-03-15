<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

/**
 * Defines grid for attributes group > attributes list
 */
final class AttributeGridDefinitionFactory extends \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractFilterableGridDefinitionFactory
{
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\DeleteActionTrait;
    public const GRID_ID = 'attribute';
    /**
     * @param HookDispatcherInterface $hookDispatcher
     * @param int $attributeGroupId
     * @param AttributeGroupViewDataProviderInterface $attributeGroupViewDataProvider
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, $attributeGroupId, \PrestaShop\PrestaShop\Core\AttributeGroup\AttributeGroupViewDataProviderInterface $attributeGroupViewDataProvider)
    {
    }
}
