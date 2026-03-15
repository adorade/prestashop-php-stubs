<?php

namespace PrestaShop\PrestaShop\Core\Domain\Position\Exception;

/**
 * Exception thrown when invalid data is used to create a RowPosition value object.
 */
class PositionConstraintException extends \PrestaShop\PrestaShop\Core\Domain\Exception\DomainException
{
    public const INVALID_ROW_ID = 10;
    public const INVALID_OLD_POSITION = 20;
    public const INVALID_NEW_POSITION = 30;
}
