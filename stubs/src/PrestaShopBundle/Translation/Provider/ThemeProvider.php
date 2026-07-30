<?php

namespace PrestaShopBundle\Translation\Provider;

class ThemeProvider extends \PrestaShopBundle\Translation\Provider\AbstractProvider
{
    /**
     * @var string the theme resources directory
     */
    public $themeResourcesDirectory;
    /**
     * @var Filesystem
     */
    public $filesystem;
    /**
     * @var ThemeRepository
     */
    public $themeRepository;
    /**
     * @var ThemeExtractor
     */
    public $themeExtractor;
    /**
     * @var string Path to app/Resources/translations/
     */
    public $defaultTranslationDir;
    /**
     * {@inheritdoc}
     */
    public function getTranslationDomains()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getIdentifier()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getMessageCatalogue()
    {
    }
    /**
     * @param string|null $baseDir
     *
     * @return string Path to app/themes/{themeName}/translations/{locale}
     */
    public function getResourceDirectory($baseDir = null)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getDirectories()
    {
    }
    /**
     * @return string the path to the Theme translations folder
     */
    public function getThemeResourcesDirectory()
    {
    }
    /**
     * @param string $themeName The theme name
     *
     * @return self
     */
    public function setThemeName($themeName)
    {
    }
    /**
     * @param string|null $themeName
     *
     * @return MessageCatalogue
     */
    public function getDatabaseCatalogue($themeName = null)
    {
    }
    /**
     * @throws \Exception
     *
     * Will update translations files of the Theme
     */
    public function synchronizeTheme()
    {
    }
    /**
     * @return MessageCatalogueInterface
     *
     * @throws \Exception
     */
    public function getThemeCatalogue()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getDefaultResourceDirectory()
    {
    }
}
