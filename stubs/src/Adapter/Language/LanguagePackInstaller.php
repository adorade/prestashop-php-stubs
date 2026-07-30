<?php

namespace PrestaShop\PrestaShop\Adapter\Language;

/**
 * Class LanguagePack is responsible for the language pack actions regarding installation.
 */
final class LanguagePackInstaller implements \PrestaShop\PrestaShop\Core\Language\Pack\LanguagePackInstallerInterface
{
    /**
     * LanguagePackInstaller constructor.
     *
     * @param TranslatorInterface $translator
     * @param Version $version
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, \PrestaShop\PrestaShop\Core\Foundation\Version $version)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function downloadAndInstallLanguagePack($iso)
    {
    }
}
