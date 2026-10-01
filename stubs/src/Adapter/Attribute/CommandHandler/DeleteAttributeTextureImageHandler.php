<?php

namespace PrestaShop\PrestaShop\Adapter\Attribute\CommandHandler;

/**
 * Handles command which deletes the Attribute using legacy object model
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class DeleteAttributeTextureImageHandler extends \PrestaShop\PrestaShop\Adapter\Attribute\AbstractAttributeHandler implements \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\CommandHandler\DeleteAttributeTextureImageHandlerInterface
{
    public function __construct(private \PrestaShop\PrestaShop\Adapter\File\Uploader\AttributeFileUploader $attributeFileUploader)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Command\DeleteAttributeTextureImageCommand $command)
    {
    }
}
