<?php

namespace PrestaShopBundle\Translation;

class TranslatorLanguageLoader
{
    public const TRANSLATION_DIR = _PS_ROOT_DIR_ . '/translations';
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Module\Repository\ModuleRepository $moduleRepository, private readonly ?\PrestaShop\PrestaShop\Core\Translation\Storage\Extractor\ExtraPropertyTranslationExtractor $extraPropertyTranslationExtractor = null)
    {
    }
    /**
     * @param bool $isAdminContext
     *
     * @return self
     */
    public function setIsAdminContext(bool $isAdminContext): self
    {
    }
    /**
     * Loads a language into a translator
     *
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator Translator to modify
     * @param string $locale Locale code for the language to load
     * @param bool $withDB [default=true] Whether to load translations from the database or not
     * @param \PrestaShop\PrestaShop\Core\Addon\Theme\Theme|null $theme [default=false] Currently active theme (Front office only)
     */
    public function loadLanguage(\Symfony\Contracts\Translation\TranslatorInterface $translator, $locale, $withDB = true, ?\PrestaShop\PrestaShop\Core\Addon\Theme\Theme $theme = null)
    {
    }
    /**
     * Loads translations for a single module
     */
    protected function loadModuleTranslations(\Symfony\Contracts\Translation\TranslatorInterface $translator, string $moduleName, string $modulePath, string $locale, bool $withDB = true): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Addon\Theme\Theme|null $theme
     *
     * @return array
     */
    protected function getTranslationResourcesDirectories(?\PrestaShop\PrestaShop\Core\Addon\Theme\Theme $theme = null): array
    {
    }
}
