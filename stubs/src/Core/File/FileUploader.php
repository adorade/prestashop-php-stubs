<?php

namespace PrestaShop\PrestaShop\Core\File;

/**
 * Class is responsible to uploaded file through HTTP form or binary content
 */
class FileUploader implements \PrestaShop\PrestaShop\Core\File\FileUploaderInterface
{
    /**
     * @var int
     */
    protected $maximumSize;
    /**
     * @var string
     */
    protected $downloadDirectory;
    /**
     * @param string $downloadDirectory Server path where the file will be uploaded
     * @param int $maximumSize Maximum accepted file size
     */
    public function __construct(string $downloadDirectory, int $maximumSize)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function upload($file): array
    {
    }
    /**
     * Validate file size
     *
     * @param array $file
     *
     * @throws InvalidFileException
     * @throws MaximumSizeExceededException
     */
    protected function validateSize(array $file): void
    {
    }
    /**
     * Validate if file is an uploaded file
     *
     * @param array $file
     *
     * @throws InvalidFileException
     * @throws FileUploadException
     */
    protected function validateIsUploadedFile(array $file): void
    {
    }
    /**
     * Generate file name from uniqid
     *
     * @return string
     */
    protected function generateFileName(): string
    {
    }
    /**
     * Upload file from Http Post
     *
     * @param array{tmp_name: string, type: string, name: string} $file the $_FILES content
     *
     * @return array{id: string, file_name: string, mime_type: string}
     *
     * @throws FileUploadException
     */
    public function uploadFromHttpPost(array $file): array
    {
    }
    /**
     * Upload file from binary request
     *
     * @param string $content The binary string
     *
     * @return array{id: string, file_name: string, mime_type: string}
     *
     * @throws FileUploadException
     */
    public function uploadFromBinaryFile(string $content): array
    {
    }
}
