<?php

namespace PrestaShop\PrestaShop\Core\Image\Uploader\Exception;

class UploadedImageConstraintException extends \PrestaShop\PrestaShop\Core\Image\Exception\ImageException
{
    public const EXCEEDED_SIZE = 1;
    public const UNRECOGNIZED_FORMAT = 2;
    public const UNKNOWN_ERROR = 4;
}
