<?php

namespace PrestaShop\PrestaShop\Core\Import\File\DataRow;

/**
 * Class DataRowCollection defines a collection of data rows.
 */
final class DataRowCollection implements \PrestaShop\PrestaShop\Core\Import\File\DataRow\DataRowCollectionInterface
{
    /**
     * {@inheritdoc}
     */
    public function addDataRow(\PrestaShop\PrestaShop\Core\Import\File\DataRow\DataRowInterface $dataRow)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function offsetExists($offset): bool
    {
    }
    /**
     * {@inheritdoc}
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function offsetSet($offset, $value): void
    {
    }
    /**
     * {@inheritdoc}
     */
    public function offsetUnset($offset): void
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getIterator(): \Traversable
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getLargestRowSize()
    {
    }
}
