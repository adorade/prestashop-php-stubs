<?php

namespace PrestaShop\PrestaShop\Core\Grid\Action\Bulk;

/**
 * Class BulkActionCollection holds bulk action collection available for grid.
 *
 * @property BulkActionInterface[] $items
 */
final class BulkActionCollection extends \PrestaShop\PrestaShop\Core\Grid\Collection\AbstractCollection implements \PrestaShop\PrestaShop\Core\Grid\Action\Bulk\BulkActionCollectionInterface
{
    /**
     * {@inheritdoc}
     */
    public function add(\PrestaShop\PrestaShop\Core\Grid\Action\Bulk\BulkActionInterface $bulkAction)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function toArray()
    {
    }
}
