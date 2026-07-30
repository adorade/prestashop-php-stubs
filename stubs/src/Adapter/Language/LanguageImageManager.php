<?php

namespace PrestaShop\PrestaShop\Adapter\Language;

/**
 * Handles language images (flag, "no image" placeholders)
 */
class LanguageImageManager
{
    /**
     * Path where images are saved to
     */
    public const IMG_PATH = _PS_IMG_DIR_ . '/l/';
    /**
     * Path were source images are stored
     */
    public const IMG_SOURCE_PATH = _PS_IMG_SOURCE_DIR_ . '/l/';
    /**
     * Path where flags are stored
     */
    public const FLAGS_SOURCE = _PS_IMG_SOURCE_DIR_ . 'flags/%s.jpg';
    /**
     * Path where flags are copied to
     */
    public const FLAGS_DESTINATION = self::IMG_PATH . '%d.jpg';
    /**
     * Default flag
     */
    public const FALLBACK_FLAG_SOURCE = self::IMG_SOURCE_PATH . 'none.jpg';
    public const IMAGE_DIRECTORIES = [_PS_CAT_IMG_DIR_, _PS_MANU_IMG_DIR_, _PS_PRODUCT_IMG_DIR_, _PS_SUPP_IMG_DIR_];
    public const PLACEHOLDER_IMAGE_NAME_PATTERNS = ['%s.jpg', '%s-default-%s.jpg'];
    public const DEFAULT_LANGUAGE_CODE = 'en';
    /**
     * Sets up the language flag image for the given language
     *
     * @param string $localeCode IETF language tag
     * @param int $langId Language id
     * @param string|null $flagCode If provided, use this flag code. By default, auto-detect using locale code.
     */
    public function setupLanguageFlag(string $localeCode, int $langId, ?string $flagCode = null): void
    {
    }
    /**
     * Creates default copies for the "no image" image
     *
     * @param string $isoCode 2-letter ISO code
     */
    public function setupDefaultImagePlaceholder(string $isoCode): void
    {
    }
    /**
     * Deletes images associated with the language
     *
     * @param int $langId
     * @param string $isoCode 2-letter ISO code
     */
    public function deleteImages(int $langId, string $isoCode): void
    {
    }
}
