<?php

namespace PrestaShop\PrestaShop\Core\Domain\Order\Command;

/**
 * Sends email to customer with link for processing the order from cart
 */
class SendProcessOrderEmailCommand
{
    /**
     * @param int $cartId
     *
     * @throws CartConstraintException
     */
    public function __construct(int $cartId)
    {
    }
    /**
     * @return CartId
     */
    public function getCartId(): \PrestaShop\PrestaShop\Core\Domain\Cart\ValueObject\CartId
    {
    }
}
