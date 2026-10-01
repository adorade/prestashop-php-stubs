<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

/**
 * Defines carriers grid
 */
class CarrierGridDefinitionFactory extends \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractGridDefinitionFactory
{
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\DeleteActionTrait;
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\BulkDeleteActionTrait;
    public const GRID_ID = 'carrier';
    /**
     * @var string
     */
    protected $dbPrefix;
    /**
     * @var \Doctrine\DBAL\Connection
     */
    protected $connection;
    /**
     * @var bool
     */
    protected $showExternalModuleColumn;
    /**
     * @param \PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Hook\HookDispatcherInterface $hookDispatcher, $dbPrefix, \Doctrine\DBAL\Connection $connection)
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function getId()
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function getName()
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function getColumns()
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function getFilters()
    {
    }
    protected function getGridActions()
    {
    }
    protected function getBulkActions()
    {
    }
    protected function hasActiveExternalModuleCarriers()
    {
    }
}
