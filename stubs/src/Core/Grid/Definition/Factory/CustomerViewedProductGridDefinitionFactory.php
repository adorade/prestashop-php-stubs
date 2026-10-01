<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

/**
 * Class CustomerViewedProductGridDefinitionFactory defines customer's viewed products grid structure.
 */
final class CustomerViewedProductGridDefinitionFactory extends \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractGridDefinitionFactory
{
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\DeleteActionTrait;
    public const GRID_ID = 'customer_viewed_product';
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
