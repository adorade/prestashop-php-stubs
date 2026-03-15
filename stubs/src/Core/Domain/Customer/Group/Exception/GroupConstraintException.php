<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\Group\Exception;

/**
 * Is thrown when Group constraints are violated
 */
class GroupConstraintException extends \PrestaShop\PrestaShop\Core\Domain\Customer\Group\Exception\GroupException
{
    /**
     * When invalid groupId value is provided
     */
    public const INVALID_ID = 10;
}
