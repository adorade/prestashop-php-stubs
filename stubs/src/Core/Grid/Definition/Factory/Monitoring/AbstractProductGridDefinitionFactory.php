<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory\Monitoring;

/**
 * Defines reusable grids for product listing in monitoring page
 */
abstract class AbstractProductGridDefinitionFactory extends \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\AbstractGridDefinitionFactory
{
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\DeleteActionTrait;
    use \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\BulkDeleteActionTrait;
    public const GRID_ID = 'default';
    /**
     * {@inheritdoc}
     */
    protected function getId()
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
    /**
     * {@inheritdoc}
     */
    protected function getGridActions()
    {
    }
    /**
     * @return RowActionCollectionInterface
     */
    protected function getRowActions()
    {
    }
    /**
     * {@inheritdoc}
     */
    protected function getBulkActions(): \PrestaShop\PrestaShop\Core\Grid\Action\Bulk\BulkActionCollectionInterface
    {
    }
}
