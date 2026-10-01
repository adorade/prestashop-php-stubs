<?php

namespace PrestaShop\PrestaShop\Adapter\File\Uploader;

/**
 * Uploads order state file
 */
class OrderStateFileUploader implements \PrestaShop\PrestaShop\Core\Domain\OrderState\OrderStateFileUploaderInterface
{
    /**
     * @var \PrestaShop\PrestaShop\Core\Configuration\UploadSizeConfigurationInterface
     */
    protected $uploadSizeConfiguration;
    /**
     * @param \PrestaShop\PrestaShop\Core\Configuration\UploadSizeConfigurationInterface $uploadSizeConfiguration
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Configuration\UploadSizeConfigurationInterface $uploadSizeConfiguration)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @param bool $throwExceptionOnFailure
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\OrderState\Exception\OrderStateConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Domain\OrderState\Exception\OrderStateUploadFailedException
     */
    public function upload(string $filePath, int $id, int $fileSize, bool $throwExceptionOnFailure = true): void
    {
    }
    /**
     * @param string $filePath
     * @param int $id
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\OrderState\Exception\OrderStateUploadFailedException
     */
    protected function uploadFile(string $filePath, int $id): void
    {
    }
    /**
     * @param int $fileSize
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\OrderState\Exception\OrderStateConstraintException
     */
    protected function checkFileAllowedForUpload(int $fileSize): void
    {
    }
}
