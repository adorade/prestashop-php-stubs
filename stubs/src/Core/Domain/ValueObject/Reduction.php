<?php

namespace PrestaShop\PrestaShop\Core\Domain\ValueObject;

/**
 * Provides valid reduction values
 */
class Reduction
{
    /**
     * For reducing concrete amount of money from price
     */
    public const TYPE_AMOUNT = 'amount';
    /**
     * For reducing certain percentage calculated from price
     */
    public const TYPE_PERCENTAGE = 'percentage';
    /**
     * Allowed reduction types
     */
    public const ALLOWED_TYPES = [self::TYPE_AMOUNT, self::TYPE_PERCENTAGE];
    /**
     * Maximum allowed value for percentage type reduction
     */
    public const MAX_ALLOWED_PERCENTAGE = 100;
    /**
     * @param string $type
     * @param string $value For percentage, we use value between 0 and 100
     *
     * @throws DomainConstraintException
     */
    public function __construct(string $type, string $value)
    {
    }
    /**
     * @return string
     */
    public function getType(): string
    {
    }
    /**
     * @return DecimalNumber
     */
    public function getValue(): \PrestaShop\Decimal\DecimalNumber
    {
    }
}
