<?php

namespace PrestaShop\PrestaShop\Core\Grid\Action\Bulk;

/**
 * Interface BulkActionCollectionInterface defines bulk actions contract.
 */
interface BulkActionCollectionInterface extends \Iterator
{
    /**
     * Add bulk action to collection.
     *
     * @param BulkActionInterface $bulkAction
     *
     * @return self
     */
    public function add(\PrestaShop\PrestaShop\Core\Grid\Action\Bulk\BulkActionInterface $bulkAction);
    /**
     * Get bulk actions as array.
     *
     * @return array
     */
    public function toArray();
}
