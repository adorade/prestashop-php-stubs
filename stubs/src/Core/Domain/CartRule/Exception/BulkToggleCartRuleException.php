<?php

namespace PrestaShop\PrestaShop\Core\Domain\CartRule\Exception;

class BulkToggleCartRuleException extends \PrestaShop\PrestaShop\Core\Domain\CartRule\Exception\CartRuleException
{
    /**
     * @param int[] $cartRuleIds
     * @param string $message
     * @param int $code
     * @param Exception $previous
     */
    public function __construct(array $cartRuleIds, $message = '', $code = 0, \Exception $previous = null)
    {
    }
    /**
     * @return int[]
     */
    public function getCartRuleIds(): array
    {
    }
}
