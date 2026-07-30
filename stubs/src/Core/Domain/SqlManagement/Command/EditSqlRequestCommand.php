<?php

namespace PrestaShop\PrestaShop\Core\Domain\SqlManagement\Command;

/**
 * This command modifies an existing SqlRequest object, replacing its data by the provided one.
 */
class EditSqlRequestCommand
{
    /**
     * @param SqlRequestId $sqlRequestId
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
     * @return SqlRequestId
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
     * @throws SqlRequestConstraintException
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
     * @throws SqlRequestConstraintException
     */
    public function setSql($sql)
    {
    }
}
