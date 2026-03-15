<?php

namespace PrestaShop\PrestaShop\Adapter\AttributeGroup\CommandHandler;

/**
 * Handles command which deletes attribute group using legacy object model
 */
final class DeleteAttributeGroupHandler extends \PrestaShop\PrestaShop\Adapter\AttributeGroup\AbstractAttributeGroupHandler implements \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\CommandHandler\DeleteAttributeGroupHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws AttributeGroupException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Command\DeleteAttributeGroupCommand $command)
    {
    }
}
