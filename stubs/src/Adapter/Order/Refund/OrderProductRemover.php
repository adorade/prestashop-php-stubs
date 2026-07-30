<?php

namespace PrestaShop\PrestaShop\Adapter\Order\Refund;

class OrderProductRemover
{
    /**
     * @param Order $order
     * @param OrderDetail $orderDetail
     * @param bool $updateCart Used when you don't want to update the cart (CartRule removal for example)
     *
     * @return CartProductsComparator
     */
    public function deleteProductFromOrder(\Order $order, \OrderDetail $orderDetail, bool $updateCart = true): \PrestaShop\PrestaShop\Adapter\Cart\Comparator\CartProductsComparator
    {
    }
}
