<?php

namespace PrestaShop\PrestaShop\Core\Domain\QuickAccess\Exception;

class QuickAccessConstraintException extends \PrestaShop\PrestaShop\Core\Domain\QuickAccess\Exception\QuickAccessException
{
    public const INVALID_ID = 1;
    public const INVALID_NAME = 2;
    public const INVALID_LINK = 3;
    public const LINK_ALREADY_EXISTS = 4;
}
