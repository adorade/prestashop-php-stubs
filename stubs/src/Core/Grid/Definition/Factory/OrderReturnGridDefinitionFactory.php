<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

/**
 * Class OrderReturnGridDefinitionFactory builds the grid definition for the merchandise returns
 * (canonical domain name: OrderReturn) listing page.
 */
final class OrderReturnGridDefinitionFactory extends \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractFilterableGridDefinitionFactory
{
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\BulkDeleteActionTrait;
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\DeleteActionTrait;
    /**
     * Stable filter key persisted in ps_admin_filter — do not rename even when the surrounding
     * code switches to the canonical "OrderReturn" naming, or merchants' saved filters reset.
     */
    public const GRID_ID = 'merchandise_return';
}
