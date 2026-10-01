<?php

namespace PrestaShop\PrestaShop\Core\Domain\AttributeGroup\CommandHandler;

/**
 * Describes a service that handles attribute group edit command.
 */
interface EditAttributeGroupHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Command\EditAttributeGroupCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Command\EditAttributeGroupCommand $command): void;
}
