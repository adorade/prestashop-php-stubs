<?php

namespace PrestaShop\PrestaShop\Adapter\Attribute\CommandHandler;

/**
 * Handles adding of attribute value using legacy logic.
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class AddAttributeHandler implements \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\CommandHandler\AddAttributeHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Attribute\Repository\AttributeRepository $attributeRepository, private readonly \PrestaShop\PrestaShop\Adapter\Attribute\Validate\AttributeValidator $attributeValidator, private readonly \PrestaShop\PrestaShop\Adapter\File\Uploader\AttributeFileUploader $attributeFileUploader)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\Command\AddAttributeCommand $command): \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\ValueObject\AttributeId
    {
    }
}
