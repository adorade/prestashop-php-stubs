<?php

namespace PrestaShop\PrestaShop\Core\Addon\Theme;

/**
 * Class ThemeZipUploader uploads theme to local filesystem.
 */
final class ThemeZipUploader implements \PrestaShop\PrestaShop\Core\Addon\Theme\ThemeUploaderInterface
{
    /**
     * @param ConfigurationInterface $configuration
     */
    public function __construct(\PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function upload(\Symfony\Component\HttpFoundation\File\UploadedFile $uploadedTheme)
    {
    }
}
