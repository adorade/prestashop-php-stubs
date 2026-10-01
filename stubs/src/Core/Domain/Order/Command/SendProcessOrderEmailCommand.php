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
     * @throws \PrestaShop\PrestaShop\Core\Domain\Cart\Exception\CartConstraintException
     */
    public function __construct(int $cartId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Cart\ValueObject\CartId
     */
    public function getCartId(): \PrestaShop\PrestaShop\Core\Domain\Cart\ValueObject\CartId
    {
    }
}
