<?php

namespace PrestaShop\PrestaShop\Core\Domain\ImageSettings\CommandHandler;

/**
 * Handles command that delete images from defined image type
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class DeleteImagesFromTypeHandler implements \PrestaShop\PrestaShop\Core\Domain\ImageSettings\CommandHandler\DeleteImagesFromTypeHandlerInterface
{
    public function __construct(private readonly \PrestaShopBundle\Entity\Repository\ImageTypeRepository $imageTypeRepository, private readonly \PrestaShop\PrestaShop\Adapter\ImageThumbnailsRegenerator $imageThumbnailsRegenerator)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\ImageSettings\Command\DeleteImagesFromTypeCommand $command): void
    {
    }
}
