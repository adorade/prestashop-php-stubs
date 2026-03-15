<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\QueryResult;

/**
 * Holds cart information data
 */
class CartForOrderCreation
{
    /**
     * @param int $cartId
     * @param array $products
     * @param int $currencyId
     * @param int $langId
     * @param CartRule[] $cartRules
     * @param CartAddress[] $addresses
     * @param CartSummary $summary
     * @param CartShipping $shipping
     */
    public function __construct(int $cartId, array $products, int $currencyId, int $langId, array $cartRules, array $addresses, \PrestaShop\PrestaShop\Core\Domain\Cart\QueryResult\CartForOrderCreation\CartSummary $summary, \PrestaShop\PrestaShop\Core\Domain\Cart\QueryResult\CartForOrderCreation\CartShipping $shipping = null)
    {
    }
    /**
     * @return int
     */
    public function getCartId(): int
    {
    }
    /**
     * @return CartProduct[]
     */
    public function getProducts(): array
    {
    }
    /**
     * @return int
     */
    public function getCurrencyId(): int
    {
    }
    /**
     * @return int
     */
    public function getLangId(): int
    {
    }
    /**
     * @return CartRule[]
     */
    public function getCartRules(): array
    {
    }
    /**
     * @return CartAddress[]
     */
    public function getAddresses(): array
    {
    }
    /**
     * @return CartShipping|null
     */
    public function getShipping(): ?\PrestaShop\PrestaShop\Core\Domain\Cart\QueryResult\CartForOrderCreation\CartShipping
    {
    }
    /**
     * @return CartSummary
     */
    public function getSummary(): \PrestaShop\PrestaShop\Core\Domain\Cart\QueryResult\CartForOrderCreation\CartSummary
    {
    }
}
