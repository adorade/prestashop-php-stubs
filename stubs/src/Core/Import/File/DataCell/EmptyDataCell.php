<?php

namespace PrestaShop\PrestaShop\Core\Import\File\DataCell;

/**
 * Class EmptyDataCell defines an empty data cell.
 */
final class EmptyDataCell implements \PrestaShop\PrestaShop\Core\Import\File\DataCell\DataCellInterface
{
    /**
     * {@inheritdoc}
     */
    public function getValue()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getKey()
    {
    }
}
