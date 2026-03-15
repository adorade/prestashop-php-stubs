<?php

namespace PrestaShop\PrestaShop\Core\Domain\Supplier;

/**
 * Defines settings for supplier
 */
final class SupplierSettings
{
    /**
     * Maximum allowed symbols for name
     */
    public const MAX_NAME_LENGTH = 64;
    /**
     * Maximum allowed symbols for meta title
     */
    public const MAX_META_TITLE_LENGTH = 255;
    /**
     * Maximum allowed symbols for meta description
     */
    public const MAX_META_DESCRIPTION_LENGTH = 512;
    /**
     * Maximum allowed symbols for meta keyword
     */
    public const MAX_META_KEYWORD_LENGTH = 255;
}
