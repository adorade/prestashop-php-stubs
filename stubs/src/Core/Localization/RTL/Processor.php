<?php

namespace PrestaShop\PrestaShop\Core\Localization\RTL;

/**
 * Processes stylesheets by transforming them to RTL.
 */
class Processor
{
    /**
     * Processor constructor.
     *
     * @param string $adminDir Path to PrestaShop's admin directory
     * @param string $themesDir Path to the FO themes directory
     * @param string[] $defaultModulesToProcess Path to the default modules to process
     */
    public function __construct($adminDir, $themesDir, array $defaultModulesToProcess)
    {
    }
    /**
     * Specifies the installed language 2-letter ISO code.
     *
     * @param string $languageCode
     *
     * @return Processor
     */
    public function setLanguageCode($languageCode)
    {
    }
    /**
     * Specifies if the BO theme should be processed.
     *
     * @param bool $processBOTheme
     *
     * @return Processor
     */
    public function setProcessBOTheme($processBOTheme)
    {
    }
    /**
     * Specifies the names of the FO themes to process.
     *
     * @param string[] $processFOThemes
     *
     * @return Processor
     */
    public function setProcessFOThemes(array $processFOThemes)
    {
    }
    /**
     * Specifies additional paths to process.
     *
     * @param string[] $processPaths
     *
     * @return Processor
     */
    public function setProcessPaths(array $processPaths)
    {
    }
    /**
     * Specifies if the default modules should be processed.
     *
     * @param bool $processDefaultModules
     *
     * @return Processor
     */
    public function setProcessDefaultModules($processDefaultModules)
    {
    }
    /**
     * @throws Exception\GenerationException
     * @throws \Exception
     */
    public function process()
    {
    }
}
