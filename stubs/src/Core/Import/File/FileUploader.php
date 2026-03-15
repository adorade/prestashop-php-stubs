<?php

namespace PrestaShop\PrestaShop\Core\Import\File;

/**
 * FileUploader is responsible for uploading import files to import directory.
 */
final class FileUploader
{
    /**
     * @param TranslatorInterface $translator
     * @param ImportDirectory $importDirectory
     */
    public function __construct(\Symfony\Contracts\Translation\TranslatorInterface $translator, \PrestaShop\PrestaShop\Core\Import\ImportDirectory $importDirectory)
    {
    }
    /**
     * Handle import file uploading to admin import/ directory.
     *
     * @param UploadedFile $uploadedFile
     *
     * @return File
     *
     * @throws FileUploadException
     */
    public function upload(\Symfony\Component\HttpFoundation\File\UploadedFile $uploadedFile)
    {
    }
}
