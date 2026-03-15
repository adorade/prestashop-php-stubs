<?php

namespace PrestaShop\PrestaShop\Core\Cart;

class CartRuleCollection implements \Iterator
{
    /**
     * @var CartRuleData[]
     */
    protected $cartRules = [];
    protected $iteratorPosition = 0;
    public function addCartRule(\PrestaShop\PrestaShop\Core\Cart\CartRuleData $cartRule)
    {
    }
    public function rewind(): void
    {
    }
    /**
     * @return CartRuleData
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
}
