<?php

namespace PrestaShop\PrestaShop\Core\Domain\Hook\Exception;

class HookConstraintException extends \PrestaShop\PrestaShop\Core\Domain\Hook\Exception\HookException
{
    /**
     * Code is used when invalid id is supplied.
     */
    public const INVALID_ID = 1;
}
