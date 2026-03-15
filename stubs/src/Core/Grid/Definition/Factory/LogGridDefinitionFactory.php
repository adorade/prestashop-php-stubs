<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

/**
 * Class LogGridDefinitionFactory is responsible for creating new instance of Log grid definition.
 */
final class LogGridDefinitionFactory extends \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractGridDefinitionFactory
{
    public const GRID_ID = 'logs';
    public function __construct(\PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, string $contextDateFormat)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
    }
}
