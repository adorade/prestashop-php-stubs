<?php

namespace PrestaShop\PrestaShop\Adapter\AttributeGroup\CommandHandler;

/**
 * Handles editing of attribute groups using legacy logic.
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class EditAttributeGroupHandler implements \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\CommandHandler\EditAttributeGroupHandlerInterface
{
    use \PrestaShop\PrestaShop\Adapter\Domain\LocalizedObjectModelTrait;
    public function __construct(private \PrestaShop\PrestaShop\Adapter\AttributeGroup\Repository\AttributeGroupRepository $attributeGroupRepository, private \PrestaShop\PrestaShop\Adapter\AttributeGroup\Validate\AttributeGroupValidator $validator)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Command\EditAttributeGroupCommand $command): void
    {
    }
}
