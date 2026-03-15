<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderReturn\Exception;

/**
 * Is thrown when order return constraint is violated
 */
class OrderReturnOrderStateConstraintException extends \PrestaShop\PrestaShop\Core\Domain\OrderReturn\Exception\OrderReturnException
{
    /**
     * When order return order state id is not valid
     */
    public const INVALID_ID = 10;
}
