<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\ValueObject;

/**
 * Stores id for category's menu thumbnail image.
 */
class MenuThumbnailId
{
    /**
     * @var array category is of having maximum of 3 menu thumbnails with defined Ids
     */
    public const ALLOWED_ID_VALUES = [0, 1, 2];
    /**
     * @param int $menuThumbnailId
     */
    public function __construct($menuThumbnailId)
    {
    }
    /**
     * @return int
     */
    public function getValue()
    {
    }
}
