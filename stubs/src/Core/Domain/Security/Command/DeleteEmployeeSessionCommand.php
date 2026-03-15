<?php

namespace PrestaShop\PrestaShop\Core\Domain\Security\Command;

/**
 * Class DeleteEmployeeSessionCommand is a command to delete employee session by given id.
 */
class DeleteEmployeeSessionCommand
{
    /**
     * @param int $sessionId
     */
    public function __construct(int $sessionId)
    {
    }
    /**
     * @return EmployeeSessionId
     */
    public function getEmployeeSessionId(): \PrestaShop\PrestaShop\Core\Domain\Security\ValueObject\EmployeeSessionId
    {
    }
}
