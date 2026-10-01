<?php

namespace PrestaShop\PrestaShop\Core\Domain\SqlManagement\Command;

/**
 * This command modifies an existing SqlRequest object, replacing its data by the provided one.
 */
class EditSqlRequestCommand
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\SqlManagement\ValueObject\SqlRequestId $sqlRequestId
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\SqlManagement\ValueObject\SqlRequestId $sqlRequestId)
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
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\SqlManagement\ValueObject\SqlRequestId
     */
    public function getSqlRequestId()
    {
    }
    /**
     * Set Request SQL name.
     *
     * @param string $name
     *
     * @return self
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\SqlManagement\Exception\SqlRequestConstraintException
     */
    public function setName($name)
    {
    }
    /**
     * Set Request SQL query.
     *
     * @param string $sql
     *
     * @return self
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\SqlManagement\Exception\SqlRequestConstraintException
     */
    public function setSql($sql)
    {
    }
}
