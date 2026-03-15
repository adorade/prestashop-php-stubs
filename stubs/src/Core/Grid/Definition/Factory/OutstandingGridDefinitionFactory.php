<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

/**
 * Created definition for Outstanding grid.
 */
final class OutstandingGridDefinitionFactory extends \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractGridDefinitionFactory
{
    public const GRID_ID = 'outstanding';
    /**
     * @param HookDispatcherInterface $hookDispatcher
     * @param ConfigurationInterface $configuration
     * @param int $languageId
     * @param string $contextDateFormat
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, int $languageId, string $contextDateFormat)
    {
    }
}
