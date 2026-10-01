<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

/**
 * Class CustomerCartGridDefinitionFactory defines customer's cart grid structure.
 */
final class CustomerCartGridDefinitionFactory extends \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractGridDefinitionFactory
{
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\DeleteActionTrait;
    public const GRID_ID = 'customer_cart';
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
