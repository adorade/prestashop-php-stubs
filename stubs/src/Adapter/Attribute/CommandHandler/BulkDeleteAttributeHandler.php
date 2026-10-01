<?php

namespace PrestaShop\PrestaShop\Adapter\Attribute\CommandHandler;

/**
 * Handles command which deletes attributes in bulk action using legacy object model
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class BulkDeleteAttributeHandler extends \PrestaShop\PrestaShop\Adapter\Attribute\AbstractAttributeHandler implements \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\CommandHandler\BulkDeleteAttributeHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\Command\BulkDeleteAttributeCommand $command
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\Exception\AttributeException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\Command\BulkDeleteAttributeCommand $command)
    {
    }
}
