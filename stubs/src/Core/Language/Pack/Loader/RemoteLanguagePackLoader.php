<?php

namespace PrestaShop\PrestaShop\Core\Language\Pack\Loader;

/**
 * Class RemoteLanguagePackLoader is responsible for retrieving language pack data from remote host.
 */
final class RemoteLanguagePackLoader implements \PrestaShop\PrestaShop\Core\Language\Pack\Loader\LanguagePackLoaderInterface
{
    /**
     * The link from which available languages are retrieved.
     */
    public const PACK_LINK = 'http://i18n.prestashop-project.org/translations/%ps_version%/available_languages.json';
    /**
     * @param Version $version
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Foundation\Version $version)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getLanguagePackList()
    {
    }
}
