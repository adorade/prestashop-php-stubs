<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler;

/**
 * Saves or updates Profile using form data
 */
final class ProfileFormDataHandler implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\DataHandler\FormDataHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $bus
     * @param \PrestaShop\PrestaShop\Core\Image\Uploader\ImageUploaderInterface $imageUploader
     */
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $bus, \PrestaShop\PrestaShop\Core\Image\Uploader\ImageUploaderInterface $imageUploader)
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
    public function update($profileId, array $data)
    {
    }
}
