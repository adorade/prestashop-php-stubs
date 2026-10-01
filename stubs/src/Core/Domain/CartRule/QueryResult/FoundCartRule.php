<?php

namespace PrestaShop\PrestaShop\Core\Domain\CartRule\QueryResult;

/**
 * Holds data for cart rule found after search operation
 */
class FoundCartRule
{
    /**
     * @param int $cartRuleId
     * @param string $name
     * @param string $code
     */
    public function __construct(int $cartRuleId, string $name, string $code)
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
    public function getCode(): string
    {
    }
}
