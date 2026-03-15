<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\CommandHandler;

/**
 * Interface for service that updates delivery options for cart
 */
interface UpdateCartCarrierHandlerInterface
{
    /**
     * @param UpdateCartCarrierCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Cart\Command\UpdateCartCarrierCommand $command);
}
