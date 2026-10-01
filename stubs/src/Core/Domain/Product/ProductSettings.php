<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product;

/**
 * Defines settings for product.
 * If related Value Object does not exist, then various settings (e.g. regex, length constraints) are saved here
 */
class ProductSettings
{
    /**
     * Bellow constants define maximum allowed length of product properties
     */
    public const MAX_NAME_LENGTH = 128;
    public const MAX_MPN_LENGTH = 40;
    public const MAX_META_TITLE_LENGTH = 128;
    public const MAX_META_DESCRIPTION_LENGTH = 512;
    /**
     * This is the default value for short description (a.k.a. summary) maximum length,
     * but this value is configurable,
     * it is saved in configuration named PS_PRODUCT_SHORT_DESC_LIMIT
     */
    public const MAX_DESCRIPTION_SHORT_LENGTH = 800;
    public const MAX_DESCRIPTION_LENGTH = 21844;
    public const MAX_LINK_REWRITE_LENGTH = 128;
    public const MAX_AVAILABLE_NOW_LABEL_LENGTH = 255;
    public const MAX_AVAILABLE_LATER_LABEL_LENGTH = 255;
}
