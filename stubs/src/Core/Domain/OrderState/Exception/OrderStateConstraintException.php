<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderState\Exception;

/**
 * Is thrown when order state constraint is violated
 */
class OrderStateConstraintException extends \PrestaShop\PrestaShop\Core\Domain\OrderState\Exception\OrderStateException
{
    /**
     * @var int Code is used when invalid name is provided for order state
     */
    public const INVALID_NAME = 1;
    /**
     * @var int Code is used when empty name is provided for order state
     */
    public const EMPTY_NAME = 2;
}
