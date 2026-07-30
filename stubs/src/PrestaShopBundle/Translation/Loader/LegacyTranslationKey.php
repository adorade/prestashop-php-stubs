<?php

namespace PrestaShopBundle\Translation\Loader;

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
     * Parses a legacy translation key and returns its data
     *
     * @param string $key Legacy translation key
     *
     * @return LegacyTranslationKey
     *
     * @throws InvalidLegacyTranslationKeyException
     */
    public static function buildFromString($key)
    {
    }
    /**
     * @param string $module
     * @param string $theme
     * @param string $source
     * @param string $hash
     */
    public function __construct($module, $theme, $source, $hash)
    {
    }
    /**
     * @return string
     */
    public function getModule()
    {
    }
    /**
     * @return string
     */
    public function getTheme()
    {
    }
    /**
     * @return string
     */
    public function getSource()
    {
    }
    /**
     * @return string
     */
    public function getHash()
    {
    }
}
