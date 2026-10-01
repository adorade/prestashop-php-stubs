<?php

namespace PrestaShop\PrestaShop\Core\Domain\CartRule\Exception;

/**
 * Thrown when cart rule validation fails.
 * This exception must contain already translated error message, which can be displayed to end-user
 */
class CartRuleValidityException extends \PrestaShop\PrestaShop\Core\Exception\TranslatedException
{
}
