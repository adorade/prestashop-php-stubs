<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

/**
 * Defines attribute groups grid
 */
final class AttributeGroupGridDefinitionFactory extends \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractFilterableGridDefinitionFactory
{
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\BulkDeleteActionTrait;
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\DeleteActionTrait;
    public const GRID_ID = 'attribute_group';
}
