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
     * @param string $fileEncoding
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
