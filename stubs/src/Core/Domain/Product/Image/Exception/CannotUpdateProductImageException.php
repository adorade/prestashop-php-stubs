<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Image\Exception;

class CannotUpdateProductImageException extends \PrestaShop\PrestaShop\Core\Domain\Product\Image\Exception\ProductImageException
{
    /**
     * When fails to update cover
     */
    public const FAILED_UPDATE_COVER = 10;
    /**
     * When fails to update legends
     */
    public const FAILED_UPDATE_LEGENDS = 20;
    /**
     * When fails to update position
     */
    public const FAILED_UPDATE_POSITION = 30;
}
