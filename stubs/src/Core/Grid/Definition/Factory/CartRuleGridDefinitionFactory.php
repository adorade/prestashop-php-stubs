<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

/**
 * Class responsible for providing columns, filters, actions for cart price rule list.
 */
final class CartRuleGridDefinitionFactory extends \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractGridDefinitionFactory implements \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\FilterableGridDefinitionFactoryInterface
{
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\BulkDeleteActionTrait;
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\DeleteActionTrait;
    public const GRID_ID = 'cart_rule';
    public function __construct(\PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, string $contextDateFormat)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getFilterId(): string
    {
    }
}
