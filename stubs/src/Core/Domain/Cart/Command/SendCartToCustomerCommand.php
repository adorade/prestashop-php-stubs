<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\Command;

/**
 * Sends email to the customer to process the payment for cart.
 */
class SendCartToCustomerCommand
{
    /**
     * @param int $cartId
     */
    public function __construct($cartId)
    {
    }
    /**
     * @return CartId
     */
    public function getCartId()
    {
    }
}
