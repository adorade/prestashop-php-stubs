<?php

namespace PrestaShop\PrestaShop\Adapter\Attribute\CommandHandler;

/**
 * Handles command which deletes the Attribute using legacy object model
 */
final class DeleteAttributeHandler extends \PrestaShop\PrestaShop\Adapter\Attribute\AbstractAttributeHandler implements \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\CommandHandler\DeleteAttributeHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws AttributeException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\Command\DeleteAttributeCommand $command)
    {
    }
}
