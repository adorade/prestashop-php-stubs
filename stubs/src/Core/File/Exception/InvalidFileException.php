<?php

namespace PrestaShop\PrestaShop\Core\File\Exception;

/**
 * Thrown when file is invalid
 */
class InvalidFileException extends \PrestaShop\PrestaShop\Core\File\Exception\FileException
{
    /**
     * When file size is too big
     */
    public const INVALID_SIZE = 10;
}
