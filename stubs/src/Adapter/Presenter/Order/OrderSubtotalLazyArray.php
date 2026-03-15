<?php

namespace PrestaShop\PrestaShop\Adapter\Presenter\Order;

class OrderSubtotalLazyArray extends \PrestaShop\PrestaShop\Adapter\Presenter\AbstractLazyArray
{
    /**
     * OrderSubtotalLazyArray constructor.
     *
     * @param Order $order
     */
    public function __construct(\Order $order)
    {
    }
    /**
     * @arrayAccess
     *
     * @return array
     */
    public function getProducts()
    {
    }
    /**
     * @arrayAccess
     *
     * @return array
     */
    public function getDiscounts()
    {
    }
    /**
     * @arrayAccess
     *
     * @return array
     */
    public function getShipping()
    {
    }
    /**
     * @arrayAccess
     *
     * @return array
     */
    public function getTax()
    {
    }
    /**
     * @arrayAccess
     *
     * @return array
     */
    public function getGiftWrapping()
    {
    }
}
