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
     * @param UploadedFile $uploadedTheme
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
     * @return string
     */
    public function getSourceType()
    {
    }
    /**
     * @return string|UploadedFile
     */
    public function getSource()
    {
    }
}
