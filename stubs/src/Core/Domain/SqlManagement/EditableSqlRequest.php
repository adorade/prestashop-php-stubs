<?php

namespace PrestaShop\PrestaShop\Core\Domain\SqlManagement;

/**
 * Class EditableSqlRequest stores information about SqlRequest that can be edited.
 */
class EditableSqlRequest
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\SqlManagement\ValueObject\SqlRequestId $requestSqlId
     * @param string $name
     * @param string $sql
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\SqlManagement\Exception\SqlRequestException
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\SqlManagement\ValueObject\SqlRequestId $requestSqlId, $name, $sql)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\SqlManagement\ValueObject\SqlRequestId
     */
    public function getSqlRequestId()
    {
    }
    /**
     * @return string
     */
    public function getName()
    {
    }
    /**
     * @return string
     */
    public function getSql()
    {
    }
}
