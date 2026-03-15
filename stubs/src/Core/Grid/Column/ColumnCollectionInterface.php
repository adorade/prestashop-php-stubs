<?php

namespace PrestaShop\PrestaShop\Core\Grid\Column;

/**
 * Interface ColumnCollectionInterface defines contract for grid column collection.
 */
interface ColumnCollectionInterface extends \Iterator, \Countable
{
    /**
     * Add column to collection.
     *
     * @param ColumnInterface $column
     *
     * @return static
     */
    public function add(\PrestaShop\PrestaShop\Core\Grid\Column\ColumnInterface $column);
    /**
     * Add column after given column.
     *
     * @param string $id Column id
     * @param ColumnInterface $column
     *
     * @return static
     */
    public function addAfter($id, \PrestaShop\PrestaShop\Core\Grid\Column\ColumnInterface $column);
    /**
     * @param string $id Column id
     * @param ColumnInterface $column
     *
     * @return static
     */
    public function addBefore($id, \PrestaShop\PrestaShop\Core\Grid\Column\ColumnInterface $column);
    /**
     * Remove column from collection.
     *
     * @param string $id
     *
     * @return static
     */
    public function remove($id);
    /**
     * Get columns as array.
     *
     * @return array
     */
    public function toArray();
}
