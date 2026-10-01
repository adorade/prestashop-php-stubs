<?php

namespace PrestaShop\PrestaShop\Adapter\File\Uploader;

/**
 * Uploads attachment file and if needed deletes old attachment file
 */
class AttachmentFileUploader implements \PrestaShop\PrestaShop\Core\Domain\Attachment\AttachmentFileUploaderInterface
{
    /**
     * @var \PrestaShop\PrestaShop\Core\ConfigurationInterface
     */
    protected $configuration;
    /**
     * @var \PrestaShop\PrestaShop\Core\Configuration\UploadSizeConfigurationInterface
     */
    protected $uploadSizeConfiguration;
    /**
     * @param \PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration
     * @param \PrestaShop\PrestaShop\Core\Configuration\UploadSizeConfigurationInterface $uploadSizeConfiguration
     */
    public function __construct(\PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration, \PrestaShop\PrestaShop\Core\Configuration\UploadSizeConfigurationInterface $uploadSizeConfiguration)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @param bool $throwExceptionOnFailure
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Attachment\Exception\AttachmentConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Attachment\Exception\AttachmentNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Attachment\Exception\AttachmentUploadFailedException
     */
    public function upload(string $filePath, string $uniqueFileName, int $fileSize, ?int $id = null, bool $throwExceptionOnFailure = true): void
    {
    }
    /**
     * @param int $attachmentId
     * @param bool $throwExceptionOnFailure
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Attachment\Exception\AttachmentNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Attachment\Exception\CannotUnlinkAttachmentException
     */
    protected function deleteOldFile(int $attachmentId, bool $throwExceptionOnFailure): void
    {
    }
    /**
     * @param string $filePath
     * @param string $uniqid
     * @param int $fileSize
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Attachment\Exception\AttachmentConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Attachment\Exception\AttachmentUploadFailedException
     */
    protected function uploadFile(string $filePath, string $uniqid, int $fileSize): void
    {
    }
    /**
     * @param int $fileSize
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Attachment\Exception\AttachmentConstraintException
     */
    protected function checkFileAllowedForUpload(int $fileSize): void
    {
    }
}
