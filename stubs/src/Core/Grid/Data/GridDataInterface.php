<?php

namespace PrestaShop\PrestaShop\Core\Grid\Data;

/**
 * Interface GridDataInterface exposes contract for final grid data.
 */
interface GridDataInterface
{
    /**
     * Returns final grid rows ready for rendering.
     *
     * @return RecordCollectionInterface
     */
    public function getRecords();
    /**
     * Returns total rows in data source.
     *
     * @return int
     */
    public function getRecordsTotal();
    /**
     * Return query which was used to get rows.
     *
     * @return string
     */
    public function getQuery();
}
