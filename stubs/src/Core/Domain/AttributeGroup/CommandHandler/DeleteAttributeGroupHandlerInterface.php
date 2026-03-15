<?php

namespace PrestaShop\PrestaShop\Core\Domain\AttributeGroup\CommandHandler;

/**
 * Interface for handling command which deletes attribute group
 */
interface DeleteAttributeGroupHandlerInterface
{
    /**
     * @param DeleteAttributeGroupCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Command\DeleteAttributeGroupCommand $command);
}
