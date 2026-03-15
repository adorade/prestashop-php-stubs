<?php

namespace PrestaShop\PrestaShop\Core\Grid\Position;

/**
 * Interface PositionModificationCollectionInterface defines contract for grid RowModificationInterface collection.
 */
interface PositionModificationCollectionInterface extends \Iterator, \Countable
{
    /**
     * Add rowModification to collection.
     *
     * @param PositionModificationInterface $positionModification
     *
     * @return self
     */
    public function add(\PrestaShop\PrestaShop\Core\Grid\Position\PositionModificationInterface $positionModification);
    /**
     * Remove positionModification from collection.
     *
     * @param PositionModificationInterface $positionModification
     *
     * @return self
     */
    public function remove(\PrestaShop\PrestaShop\Core\Grid\Position\PositionModificationInterface $positionModification);
    /**
     * Get positionModifications as array.
     *
     * @return array
     */
    public function toArray();
}
