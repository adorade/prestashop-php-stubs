<?php

namespace PrestaShop\PrestaShop\Core\Domain\SqlManagement\Command;

/**
 * Class SaveSqlManagerSettingsCommand saves default file encoding settings
 * for SqlRequest's query result export file.
 */
class SaveSqlRequestSettingsCommand
{
    /**
     * @param string $fileEncoding
     *
     * @throws SqlRequestSettingsConstraintException
     */
    public function __construct($fileEncoding)
    {
    }
    /**
     * @return string
     */
    public function getFileEncoding()
    {
    }
}
