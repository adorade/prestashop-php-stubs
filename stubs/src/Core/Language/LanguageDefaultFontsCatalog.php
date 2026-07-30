<?php

namespace PrestaShop\PrestaShop\Core\Language;

/**
 * Class LanguageDefaultFontsCatalog is used for languages that need a specific font to display their
 * characters. This class is a catalog referencing which languages need special fonts and associate
 * the appropriate font to each language.
 */
class LanguageDefaultFontsCatalog
{
    /**
     * @param array|null $languageDefaultFonts
     */
    public function __construct(array $languageDefaultFonts = null)
    {
    }
    /**
     * @param LanguageInterface $language
     *
     * @return string
     */
    public function getDefaultFontByLanguage(\PrestaShop\PrestaShop\Core\Language\LanguageInterface $language)
    {
    }
}
