<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

/**
 * Class CurrencyGridDefinitionFactory is responsible for defining definition for currency list located in
 * "International -> Localization -> currencies".
 */
final class CurrencyGridDefinitionFactory extends \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractGridDefinitionFactory
{
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\BulkDeleteActionTrait;
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\DeleteActionTrait;
    public const GRID_ID = 'currency';
}
