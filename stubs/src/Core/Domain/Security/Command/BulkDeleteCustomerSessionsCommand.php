<?php

namespace PrestaShop\PrestaShop\Core\Domain\Security\Command;

/**
 * Deletes customer sessions in bulk action
 */
class BulkDeleteCustomerSessionsCommand
{
    /**
     * @param array<int, int> $sessionIds
     */
    public function __construct(array $sessionIds)
    {
    }
    /**
     * @return array<int, CustomerSessionId>
     */
    public function getCustomerSessionIds(): array
    {
    }
}
