<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\Exception;

/**
 * Thrown when category image was attempted to delete but failed.
 */
class CannotDeleteImageException extends \PrestaShop\PrestaShop\Core\Domain\Category\Exception\CategoryException
{
    /**
     * Error codes to specify which type of image were not deleted.
     */
    public const COVER_IMAGE = 1;
    public const THUMBNAIL_IMAGE = 2;
    public const MENU_THUMBNAIL_IMAGE = 3;
}
