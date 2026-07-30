<?php

namespace PrestaShop\PrestaShop\Core\Addon\Theme;

/**
 * Interface ThemeUploaderInterface
 */
interface ThemeUploaderInterface
{
    /**
     * @param UploadedFile $uploadedTheme
     *
     * @return string Path to uploaded theme
     */
    public function upload(\Symfony\Component\HttpFoundation\File\UploadedFile $uploadedTheme);
}
