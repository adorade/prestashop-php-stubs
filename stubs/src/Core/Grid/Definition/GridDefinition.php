<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition;

/**
 * Class Definition is responsible for storing grid definition (columns, row actions & etc.).
 */
final class GridDefinition implements \PrestaShop\PrestaShop\Core\Grid\Definition\GridDefinitionInterface
{
    /**
     * @param string $id Unique grid identifier
     * @param string $name
     * @param ColumnCollectionInterface $columns
     * @param FilterCollectionInterface $filters
     * @param GridActionCollectionInterface $gridActions
     * @param BulkActionCollectionInterface $bulkActions
     * @param ViewOptionsCollectionInterface $viewOptions
     */
    public function __construct($id, $name, \PrestaShop\PrestaShop\Core\Grid\Column\ColumnCollectionInterface $columns, \PrestaShop\PrestaShop\Core\Grid\Filter\FilterCollectionInterface $filters, \PrestaShop\PrestaShop\Core\Grid\Action\GridActionCollectionInterface $gridActions, \PrestaShop\PrestaShop\Core\Grid\Action\Bulk\BulkActionCollectionInterface $bulkActions, \PrestaShop\PrestaShop\Core\Grid\Action\ViewOptionsCollectionInterface $viewOptions)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getColumns()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getColumnById(string $id): \PrestaShop\PrestaShop\Core\Grid\Column\ColumnInterface
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getBulkActions()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getGridActions()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getViewOptions()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
    }
    /**
     * @param string $name
     */
    public function setName($name)
    {
    }
    /**
     * @param ColumnCollectionInterface $columns
     */
    public function setColumns($columns)
    {
    }
    /**
     * @param GridActionCollectionInterface $gridActions
     */
    public function setGridActions(\PrestaShop\PrestaShop\Core\Grid\Action\GridActionCollectionInterface $gridActions)
    {
    }
    /**
     * @param BulkActionCollectionInterface $bulkActions
     */
    public function setBulkActions(\PrestaShop\PrestaShop\Core\Grid\Action\Bulk\BulkActionCollectionInterface $bulkActions)
    {
    }
    /**
     * @param FilterCollectionInterface $filters
     */
    public function setFilters(\PrestaShop\PrestaShop\Core\Grid\Filter\FilterCollectionInterface $filters)
    {
    }
}
