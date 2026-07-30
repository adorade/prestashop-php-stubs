<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\ValueObject;

/**
 * Holds value for product visibility setting
 */
class ProductVisibility
{
    public const VISIBLE_IN_CATALOG = 'catalog';
    public const VISIBLE_IN_SEARCH = 'search';
    public const VISIBLE_EVERYWHERE = 'both';
    public const INVISIBLE = 'none';
    public const AVAILABLE_VISIBILITY_VALUES = [self::VISIBLE_IN_CATALOG => self::VISIBLE_IN_CATALOG, self::VISIBLE_IN_SEARCH => self::VISIBLE_IN_SEARCH, self::VISIBLE_EVERYWHERE => self::VISIBLE_EVERYWHERE, self::INVISIBLE => self::INVISIBLE];
    /**
     * @param string $value
     */
    public function __construct(string $value)
    {
    }
    /**
     * @return string
     */
    public function getValue(): string
    {
    }
}
