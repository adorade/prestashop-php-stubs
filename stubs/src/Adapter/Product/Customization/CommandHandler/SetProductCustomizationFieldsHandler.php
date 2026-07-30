<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Customization\CommandHandler;

/**
 * Handles @see SetProductCustomizationFieldsCommand using legacy object model
 */
class SetProductCustomizationFieldsHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Customization\CommandHandler\SetProductCustomizationFieldsHandlerInterface
{
    /**
     * @param CustomizationFieldRepository $customizationFieldRepository,
     * @param ProductCustomizationFieldUpdater $productCustomizationFieldUpdater
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Customization\Repository\CustomizationFieldRepository $customizationFieldRepository, \PrestaShop\PrestaShop\Adapter\Product\Customization\Update\ProductCustomizationFieldUpdater $productCustomizationFieldUpdater)
    {
    }
    /**
     * {@inheritdoc}
     *
     * Creates, updates or deletes customization fields depending on differences of existing and provided fields
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Customization\Command\SetProductCustomizationFieldsCommand $command): array
    {
    }
}
