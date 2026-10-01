<?php

namespace PrestaShop\PrestaShop\Core\Domain\Title\Exception;

/**
 * Is thrown when Title constraint is violated
 */
class TitleConstraintException extends \PrestaShop\PrestaShop\Core\Domain\Title\Exception\TitleException
{
    public const INVALID_ID = 1;
}
