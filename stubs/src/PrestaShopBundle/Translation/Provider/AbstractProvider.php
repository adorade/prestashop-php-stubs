<?php

namespace PrestaShopBundle\Translation\Provider;

abstract class AbstractProvider implements \PrestaShopBundle\Translation\Provider\ProviderInterface, \PrestaShopBundle\Translation\Provider\XliffCatalogueInterface, \PrestaShopBundle\Translation\Provider\DatabaseCatalogueInterface
{
    public const DEFAULT_LOCALE = 'en-US';
    /**
     * @var string the resource directory
     */
    protected $resourceDirectory;
    /**
     * @var string the Catalogue locale
     */
    protected $locale;
    /**
     * @var string the Catalogue domain
     */
    protected $domain;
    public function __construct(\Symfony\Component\Translation\Loader\LoaderInterface $databaseLoader, $resourceDirectory)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getDirectories()
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
    public function getTranslationDomains()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getLocale()
    {
    }
    /**
     * @param string $locale
     */
    public function setLocale($locale)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function setDomain($domain)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getMessageCatalogue()
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws FileNotFoundException
     */
    public function getDefaultCatalogue($empty = true)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws FileNotFoundException
     */
    public function getXliffCatalogue()
    {
    }
    /**
     * Get the Catalogue from database only.
     *
     * @param string|null $theme
     *
     * @return MessageCatalogue A MessageCatalogue instance
     */
    public function getDatabaseCatalogue($theme = null)
    {
    }
    /**
     * @return string Path to app/Resources/translations/{locale}
     */
    public function getResourceDirectory()
    {
    }
    /**
     * @return LoaderInterface
     */
    public function getDatabaseLoader()
    {
    }
    /**
     * Empties out the catalogue by removing translations but leaving keys
     *
     * @param MessageCatalogueInterface $messageCatalogue
     *
     * @return MessageCatalogueInterface Empty the catalogue
     */
    public function emptyCatalogue(\Symfony\Component\Translation\MessageCatalogueInterface $messageCatalogue)
    {
    }
    /**
     * @param string|array<string> $paths a list of paths when we can look for translations
     * @param string $locale the Symfony (not the PrestaShop one) locale
     * @param string|null $pattern a regular expression
     *
     * @return MessageCatalogue
     *
     * @throws FileNotFoundException
     */
    public function getCatalogueFromPaths($paths, $locale, $pattern = null)
    {
    }
    /**
     * {@inheritdoc}
     */
    abstract public function getDefaultResourceDirectory();
}
