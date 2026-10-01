<?php

namespace PrestaShop\PrestaShop\Adapter\AttributeGroup\CommandHandler;

/**
 * Handles adding of attribute groups using legacy logic.
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class AddAttributeGroupHandler implements \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\CommandHandler\AddAttributeGroupHandlerInterface
{
    public function __construct(private \PrestaShop\PrestaShop\Adapter\AttributeGroup\Repository\AttributeGroupRepository $attributeGroupRepository, private \PrestaShop\PrestaShop\Adapter\AttributeGroup\Validate\AttributeGroupValidator $validator)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Command\AddAttributeGroupCommand $command): \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\ValueObject\AttributeGroupId
    {
    }
}
