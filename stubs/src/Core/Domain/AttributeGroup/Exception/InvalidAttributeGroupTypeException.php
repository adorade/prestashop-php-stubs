<?php

namespace PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Exception;

class InvalidAttributeGroupTypeException extends \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Exception\AttributeGroupConstraintException
{
    public function __construct(string $message = '', int $code = self::INVALID_TYPE, ?\Throwable $previous = null)
    {
    }
}
