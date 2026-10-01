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
     * @throws \PrestaShop\PrestaShop\Core\Domain\OrderReturn\Exception\OrderReturnConstraintException
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
