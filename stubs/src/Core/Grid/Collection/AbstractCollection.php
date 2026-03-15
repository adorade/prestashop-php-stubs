<?php

namespace PrestaShop\PrestaShop\Core\Grid\Collection;

/**
 * Class AbstractCollection is responsible for providing base collection implementation.
 */
abstract class AbstractCollection implements \Iterator, \Countable
{
    /**
     * @var array
     */
    protected $items = [];
    /**
     * {@inheritdoc}
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function next(): void
    {
    }
    /**
     * {@inheritdoc}
     */
    #[\ReturnTypeWillChange]
    public function key()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function valid(): bool
    {
    }
    /**
     * {@inheritdoc}
     */
    public function rewind(): void
    {
    }
    /**
     * {@inheritdoc}
     */
    public function count(): int
    {
    }
}
