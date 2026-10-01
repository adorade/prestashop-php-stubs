<?php

namespace PrestaShop\PrestaShop\Adapter\Cart\CommandHandler;

/**
 * Updates product price in cart using SpecificPrice.
 *
 * @internal
 */
final class UpdateProductPriceInCartHandler extends \PrestaShop\PrestaShop\Adapter\Cart\AbstractCartHandler implements \PrestaShop\PrestaShop\Core\Domain\Cart\CommandHandler\UpdateProductPriceInCartHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Cart\Command\UpdateProductPriceInCartCommand $command)
    {
    }
}
