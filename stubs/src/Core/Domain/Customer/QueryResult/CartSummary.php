<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\QueryResult;

/**
 * Holds data of summarized cart
 */
class CartSummary
{
    /**
     * @param int $cartId
     * @param string $creationDate
     * @param string $totalPrice
     */
    public function __construct(int $cartId, string $creationDate, string $totalPrice)
    {
    }
    /**
     * @return int
     */
    public function getCartId(): int
    {
    }
    /**
     * @return string
     */
    public function getCreationDate(): string
    {
    }
    /**
     * @return string
     */
    public function getTotalPrice(): string
    {
    }
}
