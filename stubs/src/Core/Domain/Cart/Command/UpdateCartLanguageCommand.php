<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\Command;

/**
 * Updates language for given cart
 */
class UpdateCartLanguageCommand
{
    /**
     * @param int $cartId
     * @param int $newLanguageId
     */
    public function __construct($cartId, $newLanguageId)
    {
    }
    /**
     * @return CartId
     */
    public function getCartId()
    {
    }
    /**
     * @return LanguageId
     */
    public function getNewLanguageId()
    {
    }
}
