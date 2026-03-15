<?php

namespace PrestaShop\PrestaShop\Core\Domain\Security\Command;

/**
 * Deletes employees sessions in bulk action
 */
class BulkDeleteEmployeeSessionsCommand
{
    /**
     * @param array<int, int> $sessionIds
     */
    public function __construct(array $sessionIds)
    {
    }
    /**
     * @return array<int, EmployeeSessionId>
     */
    public function getEmployeeSessionIds(): array
    {
    }
}
