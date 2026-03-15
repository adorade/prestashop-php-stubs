<?php

namespace PrestaShop\PrestaShop\Core\Grid\Record;

/**
 * Interface RecordCollectionInterface defines interface for raw rows wrapper.
 */
interface RecordCollectionInterface extends \Countable, \Iterator
{
    /**
     * Get raw rows.
     *
     * @return array
     */
    public function all();
}
