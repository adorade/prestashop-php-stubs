<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\CommandHandler;

/**
 * Defines contract to handle @var AddCustomizationCommand
 */
interface AddCustomizationHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Cart\Command\AddCustomizationCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Customization\ValueObject\CustomizationId|null customizationId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Cart\Command\AddCustomizationCommand $command): ?\PrestaShop\PrestaShop\Core\Domain\Product\Customization\ValueObject\CustomizationId;
}
