<?php

namespace PrestaShop\PrestaShop\Adapter\Cart\CommandHandler;

/**
 * Handles @var AddCustomizationCommand using legacy object model.
 */
final class AddCustomizationHandler extends \PrestaShop\PrestaShop\Adapter\Cart\AbstractCartHandler implements \PrestaShop\PrestaShop\Core\Domain\Cart\CommandHandler\AddCustomizationHandlerInterface
{
    /**
     * If customization fields are not required and none of them are provided
     *  then no customizations are saved and null returned.
     *  Else, saved customizationId is returned or exception is thrown.
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\Cart\Command\AddCustomizationCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Customization\ValueObject\CustomizationId|null
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Cart\Exception\CartNotFoundException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Customization\Exception\CustomizationConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Customization\Exception\CustomizationException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Exception\FileUploadException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Cart\Command\AddCustomizationCommand $command): ?\PrestaShop\PrestaShop\Core\Domain\Product\Customization\ValueObject\CustomizationId
    {
    }
}
