<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\Command;

/**
 * Updates cart carrier (a.k.a delivery option) with new one.
 */
class UpdateCartCarrierCommand
{
    /**
     * @param int $cartId
     * @param int $newCarrierId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Cart\Exception\CartConstraintException
     */
    public function __construct($cartId, $newCarrierId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Cart\ValueObject\CartId
     */
    public function getCartId(): \PrestaShop\PrestaShop\Core\Domain\Cart\ValueObject\CartId
    {
    }
    /**
     * @return int
     */
    public function getNewCarrierId(): int
    {
    }
}
