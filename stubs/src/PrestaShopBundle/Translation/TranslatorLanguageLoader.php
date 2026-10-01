<?php

namespace PrestaShopBundle\Translation;

class TranslatorLanguageLoader
{
    public const TRANSLATION_DIR = _PS_ROOT_DIR_ . '/translations';
    /**
     * TranslatorLanguageLoader constructor.
     *
     * @param \PrestaShop\PrestaShop\Adapter\Module\Repository\ModuleRepository $moduleRepository
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\Repository\ModuleRepository $moduleRepository)
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
    public function loadLanguage(\Symfony\Contracts\Translation\TranslatorInterface $translator, $locale, $withDB = true, \PrestaShop\PrestaShop\Core\Addon\Theme\Theme $theme = null)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Addon\Theme\Theme|null $theme
     *
     * @return array
     */
    protected function getTranslationResourcesDirectories(\PrestaShop\PrestaShop\Core\Addon\Theme\Theme $theme = null): array
    {
    }
}
