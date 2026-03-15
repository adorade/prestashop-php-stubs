<?php

namespace PrestaShop\PrestaShop\Core\Export\Exception;

/**
 * Is thrown when cannot export due to lacking write permissions
 */
class FileWritingException extends \PrestaShop\PrestaShop\Core\Export\Exception\ExportException
{
    /**
     * When file cannot be opened for writing
     */
    public const CANNOT_OPEN_FILE_FOR_WRITING = 10;
}
