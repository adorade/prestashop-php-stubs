<?php

namespace PrestaShop\PrestaShop\Core\Domain\Manufacturer\Exception;

/**
 * Is thrown when error occurs when uploading language image
 */
class ManufacturerImageUploadingException extends \PrestaShop\PrestaShop\Core\Domain\Manufacturer\Exception\ManufacturerException
{
    /**
     * @var int Code is used when there are less memory than needed to upload image
     */
    public const MEMORY_LIMIT_RESTRICTION = 1;
    /**
     * @var int Code is used when unexpected error occurs while uploading image
     */
    public const UNEXPECTED_ERROR = 2;
    /**
     * Code is used when image/images cannot be resized
     */
    public const UNABLE_RESIZE = 3;
}
