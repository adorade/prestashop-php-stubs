<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

class ProductLightGridDefinitionFactory extends \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractGridDefinitionFactory
{
    /**
     * Uses original product grid id to keep latest filters and sorting
     */
    public const GRID_ID = \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\ProductGridDefinitionFactory::GRID_ID;
    /**
     * @param HookDispatcherInterface $hookDispatcher
     * @param ConfigurationInterface $configuration
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration)
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function getId(): string
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function getName(): string
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function getColumns()
    {
    }
    /**
     * {@inheritDoc}
     */
    protected function getViewOptions()
    {
    }
}
