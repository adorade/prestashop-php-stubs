<?php

namespace PrestaShop\PrestaShop\Adapter\AttributeGroup\CommandHandler;

/**
 * Handles command which deletes attribute group using legacy object model
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class DeleteAttributeGroupHandler extends \PrestaShop\PrestaShop\Adapter\AttributeGroup\AbstractAttributeGroupHandler implements \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\CommandHandler\DeleteAttributeGroupHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Exception\AttributeGroupException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Command\DeleteAttributeGroupCommand $command)
    {
    }
}
