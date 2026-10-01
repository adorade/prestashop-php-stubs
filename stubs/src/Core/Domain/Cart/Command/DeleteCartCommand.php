<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\Command;

/**
 * Deletes cart command
 */
class DeleteCartCommand
{
    public function __construct(int $cartId)
    {
    }
    public function getCartId(): \PrestaShop\PrestaShop\Core\Domain\Cart\ValueObject\CartId
    {
    }
}
