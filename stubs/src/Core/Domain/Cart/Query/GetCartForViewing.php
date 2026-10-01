<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\Query;

/**
 * Get cart for viewing in Back Office
 */
class GetCartForViewing
{
    /**
     * @param int $cartId
     */
    public function __construct($cartId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Cart\ValueObject\CartId
     */
    public function getCartId()
    {
    }
}
