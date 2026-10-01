<?php

namespace PrestaShop\PrestaShop\Core\Grid\Position;

/**
 * Interface PositionModificationInterface contains the modification for a
 * designated row.
 */
interface PositionModificationInterface
{
    /**
     * The row id allowing to match it.
     *
     * @return string|int
     */
    public function getId();
    /**
     * The former row position.
     *
     * @return int
     */
    public function getOldPosition();
    /**
     * The new row position.
     *
     * @return int
     */
    public function getNewPosition();
}
