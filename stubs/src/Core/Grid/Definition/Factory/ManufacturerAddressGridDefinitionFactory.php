<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

/**
 * Class ManufacturerAddressGridDefinitionFactory is responsible for creating Manufacturers address grid definition.
 */
final class ManufacturerAddressGridDefinitionFactory extends \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractGridDefinitionFactory
{
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\BulkDeleteActionTrait;
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\DeleteActionTrait;
    public const GRID_ID = 'manufacturer_address';
}
