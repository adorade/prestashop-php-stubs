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
     * @param AddCustomizationCommand $command
     *
     * @return CustomizationId|null
     *
     * @throws CartNotFoundException
     * @throws CustomizationConstraintException
     * @throws CustomizationException
     * @throws FileUploadException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Cart\Command\AddCustomizationCommand $command): ?\PrestaShop\PrestaShop\Core\Domain\Product\Customization\ValueObject\CustomizationId
    {
    }
}
