<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

/**
 * Class CustomerOrderGridDefinitionFactory defines customer's order grid structure.
 */
final class CustomerOrderGridDefinitionFactory extends \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractGridDefinitionFactory
{
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\DeleteActionTrait;
    public const GRID_ID = 'customer_order';
    /**
     * @param \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher
     * @param string $contextDateFormat
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, $contextDateFormat)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getViewOptions()
    {
    }
}
