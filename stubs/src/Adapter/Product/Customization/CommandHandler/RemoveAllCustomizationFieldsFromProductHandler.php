<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Customization\CommandHandler;

/**
 * Handles @see RemoveAllCustomizationFieldsFromProductCommand using legacy object model
 */
final class RemoveAllCustomizationFieldsFromProductHandler implements \PrestaShop\PrestaShop\Core\Domain\Product\Customization\CommandHandler\RemoveAllCustomizationFieldsFromProductHandlerInterface
{
    /**
     * @param CustomizationFieldDeleter $customizationFieldDeleter
     * @param ProductRepository $productRepository
     * @param ProductCustomizationFieldUpdater $productCustomizationFieldUpdater
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Product\Customization\Update\CustomizationFieldDeleter $customizationFieldDeleter, \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Adapter\Product\Customization\Update\ProductCustomizationFieldUpdater $productCustomizationFieldUpdater)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Customization\Command\RemoveAllCustomizationFieldsFromProductCommand $command): void
    {
    }
}
