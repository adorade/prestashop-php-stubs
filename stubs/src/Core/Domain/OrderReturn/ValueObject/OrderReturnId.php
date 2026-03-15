<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderReturn\ValueObject;

/**
 * Provides order return id
 */
class OrderReturnId
{
    /**
     * @param int $id
     *
     * @throws OrderReturnConstraintException
     */
    public function __construct(int $id)
    {
    }
    /**
     * @return int
     */
    public function getValue(): int
    {
    }
}
