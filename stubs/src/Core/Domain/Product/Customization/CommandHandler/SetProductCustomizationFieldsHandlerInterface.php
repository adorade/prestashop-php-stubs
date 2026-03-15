<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Customization\CommandHandler;

/**
 * Defines contract to handle @see SetProductCustomizationFieldsCommand
 */
interface SetProductCustomizationFieldsHandlerInterface
{
    /**
     * @param SetProductCustomizationFieldsCommand $command
     *
     * @return CustomizationFieldId[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Customization\Command\SetProductCustomizationFieldsCommand $command): array;
}
