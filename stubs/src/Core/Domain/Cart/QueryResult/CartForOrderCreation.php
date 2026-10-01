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
     * @param \PrestaShop\PrestaShop\Core\Domain\Cart\QueryResult\CartForOrderCreation\CartRule[] $cartRules
     * @param \PrestaShop\PrestaShop\Core\Domain\Cart\QueryResult\CartForOrderCreation\CartAddress[] $addresses
     * @param \PrestaShop\PrestaShop\Core\Domain\Cart\QueryResult\CartForOrderCreation\CartSummary $summary
     * @param \PrestaShop\PrestaShop\Core\Domain\Cart\QueryResult\CartForOrderCreation\CartShipping $shipping
     * @param int $customerId
     */
    public function __construct(int $cartId, array $products, int $currencyId, int $langId, array $cartRules, array $addresses, \PrestaShop\PrestaShop\Core\Domain\Cart\QueryResult\CartForOrderCreation\CartSummary $summary, ?\PrestaShop\PrestaShop\Core\Domain\Cart\QueryResult\CartForOrderCreation\CartShipping $shipping = null, int $customerId = 0)
    {
    }
    /**
     * @return int
     */
    public function getCartId(): int
    {
    }
    /**
     * @return int
     */
    public function getCustomerId(): int
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Cart\QueryResult\CartForOrderCreation\CartProduct[]
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
     * @return \PrestaShop\PrestaShop\Core\Domain\Cart\QueryResult\CartForOrderCreation\CartRule[]
     */
    public function getCartRules(): array
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Cart\QueryResult\CartForOrderCreation\CartAddress[]
     */
    public function getAddresses(): array
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Cart\QueryResult\CartForOrderCreation\CartShipping|null
     */
    public function getShipping(): ?\PrestaShop\PrestaShop\Core\Domain\Cart\QueryResult\CartForOrderCreation\CartShipping
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Cart\QueryResult\CartForOrderCreation\CartSummary
     */
    public function getSummary(): \PrestaShop\PrestaShop\Core\Domain\Cart\QueryResult\CartForOrderCreation\CartSummary
    {
    }
}
