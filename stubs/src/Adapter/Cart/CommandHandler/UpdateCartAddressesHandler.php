<?php

namespace PrestaShop\PrestaShop\Adapter\Cart\CommandHandler;

/**
 * @internal
 */
final class UpdateCartAddressesHandler extends \PrestaShop\PrestaShop\Adapter\Cart\AbstractCartHandler implements \PrestaShop\PrestaShop\Core\Domain\Cart\CommandHandler\UpdateCartAddressesHandlerInterface
{
    /**
     * @param UpdateCartCarrierHandlerInterface $updateCartCarrierHandler
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Cart\CommandHandler\UpdateCartCarrierHandlerInterface $updateCartCarrierHandler)
    {
    }
    /**
     * @param UpdateCartAddressesCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Cart\Command\UpdateCartAddressesCommand $command)
    {
    }
}
