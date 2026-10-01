<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\QueryResult\CartForOrderCreation;

/**
 * Holds cart rule (a.k.a voucher) data for cart information
 */
class CartRule
{
    /**
     * @param int $cartRuleId
     * @param string $name
     * @param string $description
     * @param string $value
     */
    public function __construct(int $cartRuleId, string $name, string $description, string $value)
    {
    }
    /**
     * @return int
     */
    public function getCartRuleId(): int
    {
    }
    /**
     * @return string
     */
    public function getName(): string
    {
    }
    /**
     * @return string
     */
    public function getDescription(): string
    {
    }
    /**
     * @return string
     */
    public function getValue(): string
    {
    }
}
