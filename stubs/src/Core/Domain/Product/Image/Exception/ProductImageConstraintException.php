<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Image\Exception;

/**
 * Is thrown when product image constraints are violated
 */
class ProductImageConstraintException extends \PrestaShop\PrestaShop\Core\Domain\Product\Image\Exception\ProductImageException
{
    /**
     * When image id is invalid
     */
    public const INVALID_ID = 10;
    /**
     * When image cover is invalid
     */
    public const INVALID_COVER = 20;
    /**
     * When image legends are invalid
     */
    public const INVALID_LEGENDS = 30;
    /**
     * When image position is invalid
     */
    public const INVALID_POSITION = 40;
}
