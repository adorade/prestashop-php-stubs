<?php

namespace PrestaShop\PrestaShop\Core\Grid\Column;

/**
 * Class ColumnCollection holds collection of columns for grid.
 *
 * @property ColumnInterface[] $items
 */
final class ColumnCollection extends \PrestaShop\PrestaShop\Core\Grid\Collection\AbstractCollection implements \PrestaShop\PrestaShop\Core\Grid\Column\ColumnCollectionInterface
{
    /**
     * @internal
     */
    public const POSITION_AFTER = 'after';
    /**
     * @internal
     */
    public const POSITION_BEFORE = 'before';
    /**
     * {@inheritdoc}
     */
    public function add(\PrestaShop\PrestaShop\Core\Grid\Column\ColumnInterface $column)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function addAfter($id, \PrestaShop\PrestaShop\Core\Grid\Column\ColumnInterface $newColumn)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function addBefore($id, \PrestaShop\PrestaShop\Core\Grid\Column\ColumnInterface $newColumn)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function remove($id)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function toArray()
    {
    }
    /**
     * Move an existing Column to a specific position.
     *
     * @param string $id the Column ID original position in the Collection
     * @param int $position the Column ID destination position in the Collection
     *
     * @return self
     */
    public function move($id, $position)
    {
    }
}
