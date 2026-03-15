<?php

namespace PrestaShop\PrestaShop\Core\Localization\Currency;

/**
 * Transform a currency pattern by moving the symbol position, with or without
 * a separation space (no-break space).
 */
class PatternTransformer
{
    public const NO_BREAK_SPACE = " ";
    public const RTL_CHARACTER = "‏";
    public const REGULAR_SPACE = ' ';
    public const CURRENCY_SYMBOL = '¤';
    public const TYPE_LEFT_SYMBOL_WITH_SPACE = 'leftWithSpace';
    public const TYPE_LEFT_SYMBOL_WITHOUT_SPACE = 'leftWithoutSpace';
    public const TYPE_RIGHT_SYMBOL_WITH_SPACE = 'rightWithSpace';
    public const TYPE_RIGHT_SYMBOL_WITHOUT_SPACE = 'rightWithoutSpace';
    public const ALLOWED_TRANSFORMATIONS = [self::TYPE_LEFT_SYMBOL_WITH_SPACE, self::TYPE_LEFT_SYMBOL_WITHOUT_SPACE, self::TYPE_RIGHT_SYMBOL_WITH_SPACE, self::TYPE_RIGHT_SYMBOL_WITHOUT_SPACE];
    public const CHARACTERS_TO_TRIM = self::CURRENCY_SYMBOL . self::NO_BREAK_SPACE . self::REGULAR_SPACE . self::RTL_CHARACTER;
    public const TRANSFORM_DICTIONARY = [self::TYPE_LEFT_SYMBOL_WITH_SPACE => '$rtl$currencySymbol$nbsp$pattern', self::TYPE_LEFT_SYMBOL_WITHOUT_SPACE => '$rtl$currencySymbol$pattern', self::TYPE_RIGHT_SYMBOL_WITH_SPACE => '$rtl$pattern$nbsp$currencySymbol', self::TYPE_RIGHT_SYMBOL_WITHOUT_SPACE => '$rtl$pattern$currencySymbol'];
    /**
     * @param string $currencyPattern
     * @param string $transformationType
     *
     * @return string
     *
     * @throws InvalidArgumentException
     */
    public function transform(string $currencyPattern, string $transformationType): string
    {
    }
    /**
     * @param string $currencyPattern
     *
     * @return string
     */
    public function getTransformationType(string $currencyPattern)
    {
    }
}
