<?php

namespace PrestaShop\PrestaShop\Core\Domain\CustomerMessage\Exception;

class CustomerMessageConstraintException extends \PrestaShop\PrestaShop\Core\Domain\CustomerMessage\Exception\CustomerMessageException
{
    public const MISSING_MESSAGE = 1;
    public const INVALID_MESSAGE = 2;
}
