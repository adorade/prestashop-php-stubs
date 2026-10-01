<?php

namespace PrestaShop\PrestaShop\Adapter\Presenter\Order;

class OrderSubtotalLazyArray extends \PrestaShop\PrestaShop\Adapter\Presenter\AbstractLazyArray
{
    /**
     * OrderSubtotalLazyArray constructor.
     *
     * @param \Order $order
     */
    public function __construct(\Order $order)
    {
    }
    /**
     * @return array
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getProducts()
    {
    }
    /**
     * @return array
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getDiscounts()
    {
    }
    /**
     * @return array
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getShipping()
    {
    }
    /**
     * @return array
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getTax()
    {
    }
    /**
     * @return array
     */
    #[\PrestaShop\PrestaShop\Adapter\Presenter\LazyArrayAttribute(arrayAccess: true)]
    public function getGiftWrapping()
    {
    }
}
