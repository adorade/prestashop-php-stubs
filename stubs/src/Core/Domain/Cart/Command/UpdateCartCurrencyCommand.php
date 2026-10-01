<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\Command;

/**
 * Updates cart currency
 */
class UpdateCartCurrencyCommand
{
    /**
     * @param int $cartId
     * @param int $newCurrencyId
     */
    public function __construct($cartId, $newCurrencyId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Cart\ValueObject\CartId
     */
    public function getCartId()
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\CurrencyId
     */
    public function getNewCurrencyId()
    {
    }
}
