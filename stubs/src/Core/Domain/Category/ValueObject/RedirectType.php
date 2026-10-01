<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\ValueObject;

/**
 * Holds valid value of category redirect type
 */
class RedirectType
{
    /**
     * Represents value of no redirection. Page not found (404) will be displayed.
     */
    public const TYPE_NOT_FOUND = '404';
    /**
     * Represents value of no redirection. Page gone (410) will be displayed.
     */
    public const TYPE_GONE = '410';
    /**
     * Represents value of permanent redirection to a category
     */
    public const TYPE_PERMANENT = '301';
    /**
     * Represents value of temporary redirection to a category
     */
    public const TYPE_TEMPORARY = '302';
    /**
     * Available redirection types
     */
    public const AVAILABLE_REDIRECT_TYPES = [self::TYPE_NOT_FOUND => self::TYPE_NOT_FOUND, self::TYPE_GONE => self::TYPE_GONE, self::TYPE_PERMANENT => self::TYPE_PERMANENT, self::TYPE_TEMPORARY => self::TYPE_TEMPORARY];
    /**
     * @param string $type
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Category\Exception\CategoryConstraintException
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
    public function isTypeNotFound(): bool
    {
    }
    /**
     * @return bool
     */
    public function isTypeGone(): bool
    {
    }
    /**
     * @return bool
     */
    public function isCategoryType(): bool
    {
    }
}
