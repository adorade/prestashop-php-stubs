<?php

namespace PrestaShop\PrestaShop\Core\Domain\SqlManagement\Exception;

/**
 * Class SqlRequestSettingsConstraintException is thrown when invalid settings are supplied.
 */
class SqlRequestSettingsConstraintException extends \PrestaShop\PrestaShop\Core\Domain\SqlManagement\Exception\SqlRequestException
{
    public const INVALID_FILE_ENCODING = 10;
    public const NOT_SUPPORTED_FILE_ENCODING = 20;
}
