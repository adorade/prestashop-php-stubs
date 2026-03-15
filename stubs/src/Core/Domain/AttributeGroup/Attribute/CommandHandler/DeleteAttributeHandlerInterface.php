<?php

namespace PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\CommandHandler;

/**
 * Interface for handling command which deletes Attribute
 */
interface DeleteAttributeHandlerInterface
{
    /**
     * @param DeleteAttributeCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\Command\DeleteAttributeCommand $command);
}
