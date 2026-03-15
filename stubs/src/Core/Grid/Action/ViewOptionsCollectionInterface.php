<?php

namespace PrestaShop\PrestaShop\Core\Grid\Action;

/**
 * Interface ViewOptionsCollectionInterface defines contract for view options collection.
 */
interface ViewOptionsCollectionInterface extends \Iterator
{
    /**
     * Add view option to collection.
     *
     * @param string $action
     * @param mixed $value
     *
     * @return self
     */
    public function add(string $action, $value);
    /**
     * Get view options as array.
     *
     * @return array
     */
    public function all();
}
