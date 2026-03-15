<?php

namespace PrestaShop\PrestaShop\Adapter\Attribute\CommandHandler;

/**
 * Handles command which deletes attributes in bulk action using legacy object model
 */
final class BulkDeleteAttributeHandler extends \PrestaShop\PrestaShop\Adapter\Attribute\AbstractAttributeHandler implements \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\CommandHandler\BulkDeleteAttributeHandlerInterface
{
    /**
     * @param BulkDeleteAttributeCommand $command
     *
     * @throws AttributeException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\Command\BulkDeleteAttributeCommand $command)
    {
    }
}
