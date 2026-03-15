<?php

namespace PrestaShop\PrestaShop\Core\Import\File\DataRow;

/**
 * Interface DataRowCollectionInterface describes a collection of data rows.
 */
interface DataRowCollectionInterface extends \ArrayAccess, \IteratorAggregate
{
    /**
     * Add a data row to this collection.
     *
     * @param DataRowInterface $dataRow
     *
     * @return self
     */
    public function addDataRow(\PrestaShop\PrestaShop\Core\Import\File\DataRow\DataRowInterface $dataRow);
    /**
     * Get the number of cells in the largest row of collection.
     *
     * @return int
     */
    public function getLargestRowSize();
}
