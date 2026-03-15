<?php

namespace PrestaShop\PrestaShop\Core\Grid\Data;

/**
 * Class GridData is responsible for storing grid data.
 */
final class GridData implements \PrestaShop\PrestaShop\Core\Grid\Data\GridDataInterface
{
    /**
     * @param RecordCollectionInterface $records Filtered & paginated rows data
     * @param int $recordsTotal Total number of rows (without pagination)
     * @param string $query Query used to get rows
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Grid\Record\RecordCollectionInterface $records, $recordsTotal, $query = '')
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getRecords()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getRecordsTotal()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getQuery()
    {
    }
}
