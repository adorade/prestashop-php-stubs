<?php

namespace PrestaShop\PrestaShop\Adapter\AttributeGroup\CommandHandler;

/**
 * Handles command which deletes multiple attribute groups using legacy object model
 */
final class BulkDeleteAttributeGroupHandler extends \PrestaShop\PrestaShop\Adapter\AttributeGroup\AbstractAttributeGroupHandler implements \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\CommandHandler\BulkDeleteAttributeGroupHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Command\BulkDeleteAttributeGroupCommand $command)
    {
    }
}
