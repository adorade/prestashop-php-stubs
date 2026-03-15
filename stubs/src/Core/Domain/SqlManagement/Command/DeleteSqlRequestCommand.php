<?php

namespace PrestaShop\PrestaShop\Core\Domain\SqlManagement\Command;

/**
 * Class DeleteSqlRequestCommand command delete SqlRequest by given id.
 */
class DeleteSqlRequestCommand
{
    /**
     * @param SqlRequestId $sqlRequestId
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\SqlManagement\ValueObject\SqlRequestId $sqlRequestId)
    {
    }
    /**
     * @return SqlRequestId
     */
    public function getSqlRequestId()
    {
    }
}
