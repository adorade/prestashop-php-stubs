<?php

namespace PrestaShop\PrestaShop\Core\Grid\Action\Row;

/**
 * Interface RowActionCollectionInterface defines contract for row actions collection.
 */
interface RowActionCollectionInterface extends \Iterator
{
    /**
     * Add row action to collection.
     *
     * @param RowActionInterface $action
     *
     * @return self
     */
    public function add(\PrestaShop\PrestaShop\Core\Grid\Action\Row\RowActionInterface $action);
}
