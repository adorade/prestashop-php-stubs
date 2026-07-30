<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

/**
 * Class CustomerAddressGridDefinitionFactory defines customer's addresses grid structure.
 */
final class CustomerAddressGridDefinitionFactory extends \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractGridDefinitionFactory
{
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\DeleteActionTrait;
    public const GRID_ID = 'customer_address';
    public function __construct(\PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, ?\Symfony\Component\HttpFoundation\Request $currentRequest)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getViewOptions()
    {
    }
}
