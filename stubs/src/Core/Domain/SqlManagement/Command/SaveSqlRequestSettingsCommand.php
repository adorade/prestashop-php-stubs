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
     * @param string $fileSeparator
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\SqlManagement\Exception\SqlRequestSettingsConstraintException
     */
    public function __construct(string $fileEncoding, string $fileSeparator)
    {
    }
    /**
     * @return string
     */
    public function getFileEncoding(): string
    {
    }
    /**
     * @return string
     */
    public function getFileSeparator(): string
    {
    }
}
