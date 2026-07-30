<?php

namespace PrestaShop\PrestaShop\Core\Domain\Security\ValueObject;

/**
 * Class EmployeeSessionId
 */
class EmployeeSessionId
{
    /**
     * @param int $sessionId
     *
     * @throws SessionException
     */
    public function __construct(int $sessionId)
    {
    }
    /**
     * @return int
     */
    public function getValue(): int
    {
    }
}
