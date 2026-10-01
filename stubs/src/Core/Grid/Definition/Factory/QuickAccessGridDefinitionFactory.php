<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

final class QuickAccessGridDefinitionFactory extends \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractGridDefinitionFactory
{
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\BulkDeleteActionTrait;
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\DeleteActionTrait;
    public const GRID_ID = 'quick_access';
    public function getFilters()
    {
    }
}
