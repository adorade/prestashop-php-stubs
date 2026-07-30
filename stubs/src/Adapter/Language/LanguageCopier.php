<?php

namespace PrestaShop\PrestaShop\Adapter\Language;

/**
 * Class LanguageCopier responsible for copying a language into another language.
 */
final class LanguageCopier implements \PrestaShop\PrestaShop\Core\Language\Copier\LanguageCopierInterface
{
    /**
     * @param LanguageDataProvider $languageDataProvider
     * @param Filesystem $filesystem
     * @param ThemeCollection $themeCollection
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Language\LanguageDataProvider $languageDataProvider, \Symfony\Component\Filesystem\Filesystem $filesystem, \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeCollection $themeCollection)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function copy(\PrestaShop\PrestaShop\Core\Language\Copier\LanguageCopierConfigInterface $config)
    {
    }
}
