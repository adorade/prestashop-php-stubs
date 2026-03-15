<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\Exception;

/**
 * Class CategoryConstraintException.
 */
class CategoryConstraintException extends \PrestaShop\PrestaShop\Core\Domain\Category\Exception\CategoryException
{
    /**
     * Code is used when category does not have name.
     */
    public const EMPTY_NAME = 1;
    /**
     * Code is used when category does not have link rewrite.
     */
    public const EMPTY_LINK_REWRITE = 2;
    /**
     * Code is used when invalid status is set to category.
     */
    public const INVALID_STATUS = 4;
    /**
     * Code is used when invalid delete mode is used to delete a category.
     */
    public const INVALID_DELETE_MODE = 5;
    /**
     * Code is used when invalid parent id is supplied.
     */
    public const INVALID_PARENT_ID = 6;
    /**
     * Code is used when too many menu thumbnails is being set for category.
     */
    public const TOO_MANY_MENU_THUMBNAILS = 8;
    /**
     * Code is used when invalid id is supplied.
     */
    public const INVALID_ID = 10;
    /**
     * Code is used when performing bulk delete of categories with empty data.
     */
    public const EMPTY_BULK_DELETE_DATA = 12;
}
