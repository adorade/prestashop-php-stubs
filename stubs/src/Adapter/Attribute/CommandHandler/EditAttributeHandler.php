<?php

namespace PrestaShop\PrestaShop\Adapter\Attribute\CommandHandler;

/**
 * Handles editing of attribute groups using legacy logic.
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class EditAttributeHandler implements \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\CommandHandler\EditAttributeHandlerInterface
{
    use \PrestaShop\PrestaShop\Adapter\Domain\LocalizedObjectModelTrait;
    public function __construct(private \PrestaShop\PrestaShop\Adapter\Attribute\Repository\AttributeRepository $attributeRepository, private \PrestaShop\PrestaShop\Adapter\Attribute\Validate\AttributeValidator $attributeValidator, private \PrestaShop\PrestaShop\Adapter\File\Uploader\AttributeFileUploader $attributeFileUploader)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\Command\EditAttributeCommand $command): void
    {
    }
}
