<?php

namespace PrestaShop\PrestaShop\Core\Domain\CartRule\Exception;

/**
 * Is thrown when cannot update cart rule
 */
class UpdateCartRuleException extends \PrestaShop\PrestaShop\Core\Domain\CartRule\Exception\CartRuleException
{
    /**
     * When fails to update single cart rule status
     */
    public const FAILED_UPDATE_STATUS = 10;
    /**
     * When fails to update cart rule status in bulk action
     */
    public const FAILED_BULK_UPDATE_STATUS = 20;
}
