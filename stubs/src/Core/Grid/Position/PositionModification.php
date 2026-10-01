<?php

namespace PrestaShop\PrestaShop\Core\Grid\Position;

/**
 * Class PositionModification contains the modification for a
 * designated row.
 */
final class PositionModification implements \PrestaShop\PrestaShop\Core\Grid\Position\PositionModificationInterface
{
    /**
     * @param string|int $id
     * @param int $oldPosition
     * @param int $newPosition
     */
    public function __construct($id, $oldPosition, $newPosition)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getOldPosition()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getNewPosition()
    {
    }
}
