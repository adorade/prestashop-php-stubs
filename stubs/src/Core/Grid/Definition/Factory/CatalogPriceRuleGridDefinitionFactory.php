<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

/**
 * Class responsible for providing columns, filters, actions for catalog price rule list.
 */
final class CatalogPriceRuleGridDefinitionFactory extends \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractGridDefinitionFactory
{
    public const GRID_ID = 'catalog_price_rule';
    public function __construct(\PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher)
    {
    }
}
