<?php

namespace PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Attribute\CommandHandler;

/**
 * Interface for handling command which deletes Attribute
 */
interface DeleteAttributeTextureImageHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Command\DeleteAttributeTextureImageCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Command\DeleteAttributeTextureImageCommand $command);
}
