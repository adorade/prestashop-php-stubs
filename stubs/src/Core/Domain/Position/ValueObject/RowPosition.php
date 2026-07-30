<?php

namespace PrestaShop\PrestaShop\Core\Domain\Position\ValueObject;

/**
 * This value object contains the necessary data to change a position.
 */
class RowPosition
{
    public function __construct(int $rowId, int $oldPosition, int $newPosition)
    {
    }
    /**
     * @return int
     */
    public function getRowId(): int
    {
    }
    /**
     * @return int
     */
    public function getOldPosition(): int
    {
    }
    /**
     * @return int
     */
    public function getNewPosition(): int
    {
    }
}
