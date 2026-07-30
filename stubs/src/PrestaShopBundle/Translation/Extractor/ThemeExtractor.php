<?php

namespace PrestaShopBundle\Translation\Extractor;

/**
 * Extract all theme translations from Theme templates.
 *
 * xliff is the default file format, you can add custom File dumpers.
 */
class ThemeExtractor
{
    public function __construct(\PrestaShop\TranslationToolsBundle\Translation\Extractor\SmartyExtractor $smartyExtractor)
    {
    }
    /**
     * @param ThemeProvider $themeProvider
     *
     * @return $this
     */
    public function setThemeProvider(\PrestaShopBundle\Translation\Provider\ThemeProvider $themeProvider)
    {
    }
    /**
     * @param Theme $theme
     * @param string $locale
     * @param bool $rootDir
     *
     * @return MessageCatalogue|null
     *
     * @throws Exception
     */
    public function extract(\PrestaShop\PrestaShop\Core\Addon\Theme\Theme $theme, $locale = 'en-US', $rootDir = false): ?\Symfony\Component\Translation\MessageCatalogue
    {
    }
    /**
     * @param FileDumper $dumper
     *
     * @return $this
     */
    public function addDumper(\Symfony\Component\Translation\Dumper\FileDumper $dumper)
    {
    }
    /**
     * @return DumperInterface[]
     */
    public function getDumpers()
    {
    }
    /**
     * @param string $format
     *
     * @return $this
     */
    public function setFormat($format)
    {
    }
    /**
     * @return string
     */
    public function getFormat()
    {
    }
    /**
     * @param string $outputPath
     *
     * @return $this
     */
    public function setOutputPath($outputPath)
    {
    }
    /**
     * @return string
     */
    public function getOutputPath()
    {
    }
    /**
     * @return MessageCatalogue|null
     */
    public function getCatalog()
    {
    }
    /**
     * @return $this
     */
    public function disableOverridingFromDatabase()
    {
    }
    /**
     * @return $this
     */
    public function enableOverridingFromDatabase()
    {
    }
}
