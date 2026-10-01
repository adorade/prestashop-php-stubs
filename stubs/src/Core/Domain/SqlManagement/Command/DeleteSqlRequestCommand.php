<?php

namespace PrestaShop\PrestaShop\Core\Domain\SqlManagement\Command;

/**
 * Class DeleteSqlRequestCommand command delete SqlRequest by given id.
 */
class DeleteSqlRequestCommand
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\SqlManagement\ValueObject\SqlRequestId $sqlRequestId
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\SqlManagement\ValueObject\SqlRequestId $sqlRequestId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\SqlManagement\ValueObject\SqlRequestId
     */
    public function getSqlRequestId()
    {
    }
}
