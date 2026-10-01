<?php

namespace PrestaShop\PrestaShop\Core\Addon\Theme;

/**
 * Interface ThemeUploaderInterface
 */
interface ThemeUploaderInterface
{
    /**
     * @param \Symfony\Component\HttpFoundation\File\UploadedFile $uploadedTheme
     *
     * @return string Path to uploaded theme
     */
    public function upload(\Symfony\Component\HttpFoundation\File\UploadedFile $uploadedTheme);
}
