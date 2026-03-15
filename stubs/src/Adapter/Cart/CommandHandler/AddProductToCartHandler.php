<?php

namespace PrestaShop\PrestaShop\Adapter\Cart\CommandHandler;

/**
 * Handles add product to cart command
 */
final class AddProductToCartHandler extends \PrestaShop\PrestaShop\Adapter\Cart\AbstractCartHandler implements \PrestaShop\PrestaShop\Core\Domain\Cart\CommandHandler\AddProductToCartHandlerInterface
{
    /**
     * @param AddCustomizationHandlerInterface $addCustomizationHandler
     * @param UpdateProductQuantityInCartHandlerInterface $updateProductQuantityInCartHandler
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Cart\CommandHandler\AddCustomizationHandlerInterface $addCustomizationHandler, \PrestaShop\PrestaShop\Core\Domain\Cart\CommandHandler\UpdateProductQuantityInCartHandlerInterface $updateProductQuantityInCartHandler)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Cart\Command\AddProductToCartCommand $command): void
    {
    }
}
