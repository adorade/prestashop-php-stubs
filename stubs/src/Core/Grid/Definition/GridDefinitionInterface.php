<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition;

/**
 * Interface GridDefinitionInterface defines contract for grid definition.
 */
interface GridDefinitionInterface
{
    /**
     * Get unique grid identifier.
     *
     * @return string
     */
    public function getId();
    /**
     * Get grid name.
     *
     * @return string
     */
    public function getName();
    /**
     * Get grid columns.
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\Column\ColumnCollectionInterface
     */
    public function getColumns();
    /**
     * @param string $id
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\Column\ColumnInterface
     */
    public function getColumnById(string $id): \PrestaShop\PrestaShop\Core\Grid\Column\ColumnInterface;
    /**
     * @return \PrestaShop\PrestaShop\Core\Grid\Action\Bulk\BulkActionCollectionInterface
     */
    public function getBulkActions();
    /**
     * Get grid actions.
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\Action\GridActionCollectionInterface
     */
    public function getGridActions();
    /**
     * @return \PrestaShop\PrestaShop\Core\Grid\Action\ViewOptionsCollectionInterface
     */
    public function getViewOptions();
    /**
     * Get filters.
     *
     * @return \PrestaShop\PrestaShop\Core\Grid\Filter\FilterCollectionInterface
     */
    public function getFilters();
}
