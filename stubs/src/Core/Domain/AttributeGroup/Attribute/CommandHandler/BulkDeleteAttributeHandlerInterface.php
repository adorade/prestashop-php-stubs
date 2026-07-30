<?php

namespace PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\CommandHandler;

/**
 * Interface for handling command which deletes attributes in bulk action
 */
interface BulkDeleteAttributeHandlerInterface
{
    /**
     * @param BulkDeleteAttributeCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\Command\BulkDeleteAttributeCommand $command);
}
