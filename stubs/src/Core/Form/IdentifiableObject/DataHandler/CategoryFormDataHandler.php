<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler;

/**
 * Creates/updates category from data submitted in category form
 */
final class CategoryFormDataHandler implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\FormDataHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $commandBus
     * @param \PrestaShop\PrestaShop\Core\Image\Uploader\ImageUploaderInterface $categoryCoverUploader
     * @param \PrestaShop\PrestaShop\Core\Image\Uploader\ImageUploaderInterface $categoryThumbnailUploader
     * @param \PrestaShop\PrestaShop\Core\Image\Uploader\ImageUploaderInterface $categoryMenuThumbnailUploader
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $commandBus, \PrestaShop\PrestaShop\Core\Image\Uploader\ImageUploaderInterface $categoryCoverUploader, \PrestaShop\PrestaShop\Core\Image\Uploader\ImageUploaderInterface $categoryThumbnailUploader, \PrestaShop\PrestaShop\Core\Image\Uploader\ImageUploaderInterface $categoryMenuThumbnailUploader)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function create(array $data)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function update($categoryId, array $data)
    {
    }
}
