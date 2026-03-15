<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Customization\CommandHandler;

/**
 * Defines contract to handle @see RemoveAllCustomizationFieldsFromProductCommand
 */
interface RemoveAllCustomizationFieldsFromProductHandlerInterface
{
    /**
     * @param RemoveAllCustomizationFieldsFromProductCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Customization\Command\RemoveAllCustomizationFieldsFromProductCommand $command): void;
}
