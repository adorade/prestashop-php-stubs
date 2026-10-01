<?php

namespace PrestaShop\PrestaShop\Core\Import\File;

/**
 * FileUploader is responsible for uploading import files to import directory.
 */
final class FileUploader
{
    /**
     * @param \Symfony\Contracts\Translation\TranslatorInterface $translator
     * @param \PrestaShop\PrestaShop\Core\Import\ImportDirectory $importDirectory
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, \PrestaShop\PrestaShop\Core\Import\ImportDirectory $importDirectory)
    {
    }
    /**
     * Handle import file uploading to admin import/ directory.
     *
     * @param \Symfony\Component\HttpFoundation\File\UploadedFile $uploadedFile
     *
     * @return \Symfony\Component\HttpFoundation\File\File
     *
     * @throws \PrestaShopBundle\Exception\FileUploadException
     */
    public function upload(\Symfony\Component\HttpFoundation\File\UploadedFile $uploadedFile)
    {
    }
}
