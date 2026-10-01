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
     * @throws \PrestaShop\PrestaShop\Core\Domain\SqlManagement\Exception\SqlRequestException
     */
    public function __construct(array $sqlRequestIds)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\SqlManagement\ValueObject\SqlRequestId[]
     */
    public function getSqlRequestIds()
    {
    }
}
