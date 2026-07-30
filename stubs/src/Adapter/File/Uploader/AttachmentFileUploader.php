<?php

namespace PrestaShop\PrestaShop\Adapter\File\Uploader;

/**
 * Uploads attachment file and if needed deletes old attachment file
 */
class AttachmentFileUploader implements \PrestaShop\PrestaShop\Core\Domain\Attachment\AttachmentFileUploaderInterface
{
    /**
     * @var ConfigurationInterface
     */
    protected $configuration;
    /**
     * @var UploadSizeConfigurationInterface
     */
    protected $uploadSizeConfiguration;
    /**
     * @param ConfigurationInterface $configuration
     * @param UploadSizeConfigurationInterface $uploadSizeConfiguration
     */
    public function __construct(\PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, \PrestaShop\PrestaShop\Core\Configuration\UploadSizeConfigurationInterface $uploadSizeConfiguration)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @param bool $throwExceptionOnFailure
     *
     * @throws AttachmentConstraintException
     * @throws AttachmentNotFoundException
     * @throws AttachmentUploadFailedException
     */
    public function upload(string $filePath, string $uniqueFileName, int $fileSize, int $id = null, bool $throwExceptionOnFailure = true): void
    {
    }
    /**
     * @param int $attachmentId
     * @param bool $throwExceptionOnFailure
     *
     * @throws AttachmentNotFoundException
     * @throws CannotUnlinkAttachmentException
     */
    protected function deleteOldFile(int $attachmentId, bool $throwExceptionOnFailure): void
    {
    }
    /**
     * @param string $filePath
     * @param string $uniqid
     * @param int $fileSize
     *
     * @throws AttachmentConstraintException
     * @throws AttachmentUploadFailedException
     */
    protected function uploadFile(string $filePath, string $uniqid, int $fileSize): void
    {
    }
    /**
     * @param int $fileSize
     *
     * @throws AttachmentConstraintException
     */
    protected function checkFileAllowedForUpload(int $fileSize): void
    {
    }
}
