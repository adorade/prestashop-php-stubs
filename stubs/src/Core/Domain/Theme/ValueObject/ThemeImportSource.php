<?php

namespace PrestaShop\PrestaShop\Core\Domain\Theme\ValueObject;

/**
 * Class ThemeImportSource defines available sources from where theme can be imported.
 */
class ThemeImportSource
{
    public const FROM_ARCHIVE = 'from_archive';
    public const FROM_WEB = 'from_web';
    public const FROM_FTP = 'from_ftp';
    /**
     * @param \Symfony\Component\HttpFoundation\File\UploadedFile $uploadedTheme
     *
     * @return ThemeImportSource
     */
    public static function fromArchive(\Symfony\Component\HttpFoundation\File\UploadedFile $uploadedTheme)
    {
    }
    /**
     * @param string $themeUrl
     *
     * @return ThemeImportSource
     */
    public static function fromWeb($themeUrl)
    {
    }
    /**
     * @param string $themeFtp
     *
     * @return ThemeImportSource
     */
    public static function fromFtp($themeFtp)
    {
    }
    /**
     * Builds the appropriate ThemeImportSource from its scalar source type and source, dispatching
     * to the matching named factory.
     *
     * @param string $sourceType
     * @param \Symfony\Component\HttpFoundation\File\UploadedFile|string $source
     *
     * @return ThemeImportSource
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Theme\Exception\NotSupportedThemeImportSourceException
     */
    public static function fromSourceTypeAndSource(string $sourceType, \Symfony\Component\HttpFoundation\File\UploadedFile|string $source): \PrestaShop\PrestaShop\Core\Domain\Theme\ValueObject\ThemeImportSource
    {
    }
    /**
     * @return string
     */
    public function getSourceType()
    {
    }
    /**
     * @return string|\Symfony\Component\HttpFoundation\File\UploadedFile
     */
    public function getSource()
    {
    }
}
