<?php

namespace PrestaShop\PrestaShop\Core\Grid\Action;

/**
 * Interface GridActionCollectionInterface defines contract for grid action collection.
 */
interface GridActionCollectionInterface extends \Iterator
{
    /**
     * Add grid action to collection.
     *
     * @param GridActionInterface $action
     *
     * @return self
     */
    public function add(\PrestaShop\PrestaShop\Core\Grid\Action\GridActionInterface $action);
    /**
     * Get grid panel actions as array.
     *
     * @return array
     */
    public function toArray();
}
