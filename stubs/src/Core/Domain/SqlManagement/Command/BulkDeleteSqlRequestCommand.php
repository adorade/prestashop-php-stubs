<?php

namespace PrestaShop\PrestaShop\Core\Domain\SqlManagement\Command;

/**
 * Class BulkDeleteSqlRequestCommand deletes provided SqlRequests.
 */
class BulkDeleteSqlRequestCommand
{
    /**
     * @param int[] $sqlRequestIds
     *
     * @throws SqlRequestException
     */
    public function __construct(array $sqlRequestIds)
    {
    }
    /**
     * @return SqlRequestId[]
     */
    public function getSqlRequestIds()
    {
    }
}
