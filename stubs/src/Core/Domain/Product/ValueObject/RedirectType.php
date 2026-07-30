<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\ValueObject;

/**
 * Holds valid value of product redirect type
 */
class RedirectType
{
    /**
     * Represents default configuration.
     */
    public const TYPE_DEFAULT = 'default';
    /**
     * Represents value of no redirection. Product page with "Discontinued" message will be displayed, along with HTTP 200 response.
     */
    public const TYPE_SUCCESS_DISPLAYED = '200-displayed';
    /**
     * Represents value of no redirection. Page not found (404) will be displayed.
     */
    public const TYPE_NOT_FOUND = '404';
    /**
     * Represents value of no redirection. Product page with "Discontinued" message will be displayed, along with HTTP 404 response.
     */
    public const TYPE_NOT_FOUND_DISPLAYED = '404-displayed';
    /**
     * Represents value of no redirection. Page gone (410) will be displayed.
     */
    public const TYPE_GONE = '410';
    /**
     * Represents value of no redirection. Product page with "Discontinued" message will be displayed, along with HTTP 410 response.
     */
    public const TYPE_GONE_DISPLAYED = '410-displayed';
    /**
     * Represents value of permanent redirection to a category
     */
    public const TYPE_CATEGORY_PERMANENT = '301-category';
    /**
     * Represents value of temporary redirection to a category
     */
    public const TYPE_CATEGORY_TEMPORARY = '302-category';
    /**
     * Represents value of permanent redirection to another product
     */
    public const TYPE_PRODUCT_PERMANENT = '301-product';
    /**
     * Represents value of temporary redirection to another product
     */
    public const TYPE_PRODUCT_TEMPORARY = '302-product';
    /**
     * Available redirection types
     */
    public const AVAILABLE_REDIRECT_TYPES = [self::TYPE_DEFAULT => self::TYPE_DEFAULT, self::TYPE_NOT_FOUND => self::TYPE_NOT_FOUND, self::TYPE_GONE => self::TYPE_GONE, self::TYPE_CATEGORY_PERMANENT => self::TYPE_CATEGORY_PERMANENT, self::TYPE_CATEGORY_TEMPORARY => self::TYPE_CATEGORY_TEMPORARY, self::TYPE_PRODUCT_PERMANENT => self::TYPE_PRODUCT_PERMANENT, self::TYPE_PRODUCT_TEMPORARY => self::TYPE_PRODUCT_TEMPORARY, self::TYPE_SUCCESS_DISPLAYED => self::TYPE_SUCCESS_DISPLAYED, self::TYPE_NOT_FOUND_DISPLAYED => self::TYPE_NOT_FOUND_DISPLAYED, self::TYPE_GONE_DISPLAYED => self::TYPE_GONE_DISPLAYED];
    /**
     * @param string $type
     *
     * @throws ProductConstraintException
     */
    public function __construct(string $type)
    {
    }
    /**
     * @return string
     */
    public function getValue(): string
    {
    }
    /**
     * @return bool
     */
    public function isProductType(): bool
    {
    }
    /**
     * @return bool
     */
    public function isCategoryType(): bool
    {
    }
    /**
     * @return bool
     */
    public function isTypeNotFound(): bool
    {
    }
    /**
     * @return bool
     */
    public function isTypeGone(): bool
    {
    }
}
