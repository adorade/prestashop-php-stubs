<?php

namespace PrestaShop\PrestaShop\Core\Domain\AttributeGroup\CommandHandler;

/**
 * Describes add attribute group command handler
 */
interface AddAttributeGroupHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Command\AddAttributeGroupCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\ValueObject\AttributeGroupId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Command\AddAttributeGroupCommand $command): \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\ValueObject\AttributeGroupId;
}
