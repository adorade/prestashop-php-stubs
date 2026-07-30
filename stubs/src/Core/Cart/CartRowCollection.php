<?php

namespace PrestaShop\PrestaShop\Core\Cart;

class CartRowCollection implements \Iterator, \Countable
{
    /**
     * @var CartRow[]
     */
    protected $cartRows = [];
    protected $iteratorPosition = 0;
    public function addCartRow(\PrestaShop\PrestaShop\Core\Cart\CartRow $cartRow)
    {
    }
    public function rewind(): void
    {
    }
    /**
     * @return CartRow
     */
    #[\ReturnTypeWillChange]
    public function current()
    {
    }
    #[\ReturnTypeWillChange]
    public function key()
    {
    }
    public function next(): void
    {
    }
    public function valid(): bool
    {
    }
    protected function getKey($iteratorPosition)
    {
    }
    public function count(): int
    {
    }
    /**
     * return product data as array.
     *
     * @return array
     */
    public function getProducts()
    {
    }
}
