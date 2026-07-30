<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\ValueObject;

/**
 * Class CategoryDeleteMode stores mode for category deletion.
 */
class CategoryDeleteMode
{
    /**
     * Associate products with parent category and disable them.
     */
    public const ASSOCIATE_PRODUCTS_WITH_PARENT_AND_DISABLE = 'associate_and_disable';
    /**
     * Associate products with parent and do not change their status.
     */
    public const ASSOCIATE_PRODUCTS_WITH_PARENT_ONLY = 'associate_only';
    /**
     * Remove products that are associated only with category that is being deleted.
     */
    public const REMOVE_ASSOCIATED_PRODUCTS = 'remove_associated';
    /**
     * @internal
     */
    public const AVAILABLE_MODES = [self::ASSOCIATE_PRODUCTS_WITH_PARENT_AND_DISABLE, self::ASSOCIATE_PRODUCTS_WITH_PARENT_ONLY, self::REMOVE_ASSOCIATED_PRODUCTS];
    /**
     * @param string $mode
     *
     * @throws CategoryConstraintException
     */
    public function __construct($mode)
    {
    }
    /**
     * Whether products associated with category should be removed.
     *
     * @return bool
     */
    public function shouldRemoveProducts()
    {
    }
    /**
     * Whether products should be disabled when category is deleted.
     *
     * @return bool
     */
    public function shouldDisableProducts()
    {
    }
}
