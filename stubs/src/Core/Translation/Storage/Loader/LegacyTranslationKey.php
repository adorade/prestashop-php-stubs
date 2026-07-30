<?php

namespace PrestaShop\PrestaShop\Core\Translation\Storage\Loader;

/**
 * Parses a legacy translation key and returns its data
 */
class LegacyTranslationKey
{
    /**
     * @var string the expected format of a legacy translation key
     */
    public const LEGACY_TRANSLATION_FORMAT = '#<\{(?<module>[\w-]+)\}(?<theme>[\w-]+)>(?<source>[\.\w_-]+)_(?<hash>[0-9a-f]+)#';
    /**
     * @param string $module
     * @param string $theme
     * @param string $source
     * @param string $hash
     */
    public function __construct(string $module, string $theme, string $source, string $hash)
    {
    }
    /**
     * @return string
     */
    public function getModule(): string
    {
    }
    /**
     * @return string
     */
    public function getTheme(): string
    {
    }
    /**
     * @return string
     */
    public function getSource(): string
    {
    }
    /**
     * @return string
     */
    public function getHash(): string
    {
    }
    /**
     * Parses a legacy translation key and returns its data
     *
     * @param string $key Legacy translation key
     *
     * @return LegacyTranslationKey
     *
     * @throws InvalidLegacyTranslationKeyException
     */
    public static function buildFromString(string $key): \PrestaShop\PrestaShop\Core\Translation\Storage\Loader\LegacyTranslationKey
    {
    }
}
