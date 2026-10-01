<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler;

/**
 * Creates/updates root category from data submited in category form
 */
final class RootCategoryFormDataHandler implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\FormDataHandlerInterface
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
    public function update($rootCategoryId, array $data)
    {
    }
    /**
     * Creates command with form data for adding new root category
     *
     * @param array $data
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Category\Command\AddRootCategoryCommand
     */
    public function createAddRootCategoryCommand(array $data)
    {
    }
}
