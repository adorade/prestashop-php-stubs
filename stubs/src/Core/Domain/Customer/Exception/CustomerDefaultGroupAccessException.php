<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\Exception;

/**
 * Exception is thrown when customer's default groups is not configured as access group.
 * This means that default group must also be configured as access group for customer.
 */
class CustomerDefaultGroupAccessException extends \PrestaShop\PrestaShop\Core\Domain\Customer\Exception\CustomerException
{
}
