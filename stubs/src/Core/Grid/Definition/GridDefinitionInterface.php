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
     * @return ColumnCollectionInterface
     */
    public function getColumns();
    /**
     * @param string $id
     *
     * @return ColumnInterface
     */
    public function getColumnById(string $id): \PrestaShop\PrestaShop\Core\Grid\Column\ColumnInterface;
    /**
     * @return BulkActionCollectionInterface
     */
    public function getBulkActions();
    /**
     * Get grid actions.
     *
     * @return GridActionCollectionInterface
     */
    public function getGridActions();
    /**
     * @return ViewOptionsCollectionInterface
     */
    public function getViewOptions();
    /**
     * Get filters.
     *
     * @return FilterCollectionInterface
     */
    public function getFilters();
}
