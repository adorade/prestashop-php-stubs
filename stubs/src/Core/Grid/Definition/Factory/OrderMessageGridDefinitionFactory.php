<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

/**
 * Creates definition for order message grid
 */
final class OrderMessageGridDefinitionFactory extends \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractFilterableGridDefinitionFactory
{
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\BulkDeleteActionTrait;
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\DeleteActionTrait;
    public const GRID_ID = 'order_message';
}
