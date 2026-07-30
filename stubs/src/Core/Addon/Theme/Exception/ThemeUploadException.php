<?php

namespace PrestaShop\PrestaShop\Core\Addon\Theme\Exception;

/**
 * Class ThemeUploadException
 */
class ThemeUploadException extends \PrestaShop\PrestaShop\Core\Exception\CoreException
{
    public const FILE_SIZE_EXCEEDED_ERROR = 1;
    public const UNKNOWN_ERROR = 2;
    public const INVALID_MIME_TYPE = 3;
    public const FAILED_TO_MOVE_FILE = 4;
}
