<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\CommandHandler;

/**
 * Defines contract to handle @var AddCustomizationCommand
 */
interface AddCustomizationHandlerInterface
{
    /**
     * @param AddCustomizationCommand $command
     *
     * @return CustomizationId|null customizationId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Cart\Command\AddCustomizationCommand $command): ?\PrestaShop\PrestaShop\Core\Domain\Product\Customization\ValueObject\CustomizationId;
}
