<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

/**
 * Defines tax rules groups grid
 */
final class TaxRulesGroupGridDefinitionFactory extends \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractFilterableGridDefinitionFactory
{
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\BulkDeleteActionTrait;
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\DeleteActionTrait;
    public const GRID_ID = 'tax_rules_group';
    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
    }
}
