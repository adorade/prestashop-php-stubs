<?php

namespace PrestaShop\PrestaShop\Core\Domain\CartRule\Exception;

class CannotDeleteCartRuleException extends \PrestaShop\PrestaShop\Core\Domain\CartRule\Exception\CartRuleException
{
    /**
     * When fails to delete single cart rule
     */
    public const FAILED_DELETE = 10;
    /**
     * When fails to delete cart rule in bulk action
     */
    public const FAILED_BULK_DELETE = 20;
}
