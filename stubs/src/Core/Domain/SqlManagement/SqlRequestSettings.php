<?php

namespace PrestaShop\PrestaShop\Core\Domain\SqlManagement;

/**
 * Class SqlRequestSettings stores SqlRequest settings.
 */
class SqlRequestSettings
{
    /**
     * Name of the setting for SqlRequest SQL query result file encoding in ps_configuration.
     */
    public const FILE_ENCODING = 'PS_ENCODING_FILE_MANAGER_SQL';
    /**
     * Name of the setting for SqlRequest SQL query result file separator in configuration.
     */
    public const FILE_SEPARATOR = 'PS_SEPARATOR_FILE_MANAGER_SQL';
    /**
     * @param string $fileEncoding
     * @param string $fileSeparator
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
    public function getFileSeparator(): string
    {
    }
}
