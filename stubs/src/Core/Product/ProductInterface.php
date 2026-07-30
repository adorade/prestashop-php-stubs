<?php

namespace PrestaShop\PrestaShop\Core\Product;

/**
 * @deprecated
 * @see RedirectType instead
 */
interface ProductInterface
{
    public const REDIRECT_TYPE_CATEGORY_MOVED_PERMANENTLY = \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\RedirectType::TYPE_CATEGORY_PERMANENT;
    public const REDIRECT_TYPE_CATEGORY_FOUND = \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\RedirectType::TYPE_CATEGORY_TEMPORARY;
    public const REDIRECT_TYPE_PRODUCT_MOVED_PERMANENTLY = \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\RedirectType::TYPE_PRODUCT_PERMANENT;
    public const REDIRECT_TYPE_PRODUCT_FOUND = \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\RedirectType::TYPE_PRODUCT_TEMPORARY;
    public const REDIRECT_TYPE_NOT_FOUND = \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\RedirectType::TYPE_NOT_FOUND;
    public const REDIRECT_TYPE_GONE = \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\RedirectType::TYPE_GONE;
    public const REDIRECT_TYPE_DEFAULT = \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\RedirectType::TYPE_DEFAULT;
    public const REDIRECT_TYPE_NOT_FOUND_DISPLAYED = \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\RedirectType::TYPE_NOT_FOUND_DISPLAYED;
    public const REDIRECT_TYPE_GONE_DISPLAYED = \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\RedirectType::TYPE_GONE_DISPLAYED;
    public const REDIRECT_TYPE_SUCCESS_DISPLAYED = \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\RedirectType::TYPE_SUCCESS_DISPLAYED;
}
