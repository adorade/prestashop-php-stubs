<?php

namespace PrestaShop\PrestaShop\Core\Domain\AttributeGroup\CommandHandler;

/**
 * Interface for handling command which deletes mutliple attribute groups
 */
interface BulkDeleteAttributeGroupHandlerInterface
{
    /**
     * @param BulkDeleteAttributeGroupCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Command\BulkDeleteAttributeGroupCommand $command);
}
