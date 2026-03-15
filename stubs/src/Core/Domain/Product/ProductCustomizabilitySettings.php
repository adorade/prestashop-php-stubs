<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product;

/**
 * Holds value which represents how customizable the product is
 */
class ProductCustomizabilitySettings
{
    /**
     * The product does not have any customiztion fields, so it is not customizable at all
     */
    public const NOT_CUSTOMIZABLE = 0;
    /**
     * The product has at least one customization field, but none of them are required
     */
    public const ALLOWS_CUSTOMIZATION = 1;
    /**
     * The product has at least one customization field which is required
     */
    public const REQUIRES_CUSTOMIZATION = 2;
}
