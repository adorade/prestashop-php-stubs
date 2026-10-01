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
     * @return \PrestaShop\PrestaShop\Core\Domain\Cart\ValueObject\CartId
     */
    public function getCartId()
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Language\ValueObject\LanguageId
     */
    public function getNewLanguageId()
    {
    }
}
