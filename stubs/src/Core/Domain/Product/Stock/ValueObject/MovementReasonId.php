<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Stock\ValueObject;

/**
 * Stock movement reason identifier.
 */
class MovementReasonId
{
    /**
     * Configuration keys for mapping MovementReason to id.
     *
     * @todo: add other keys
     */
    public const INCREASE_BY_EMPLOYEE_EDITION_CONFIG_KEY = 'PS_STOCK_MVT_INC_EMPLOYEE_EDITION';
    public const DECREASE_BY_EMPLOYEE_EDITION_CONFIG_KEY = 'PS_STOCK_MVT_DEC_EMPLOYEE_EDITION';
    /**
     * @param int $movementReasonId
     *
     * @throws MovementReasonConstraintException
     */
    public function __construct(int $movementReasonId)
    {
    }
    /**
     * @return int
     */
    public function getValue(): int
    {
    }
}
