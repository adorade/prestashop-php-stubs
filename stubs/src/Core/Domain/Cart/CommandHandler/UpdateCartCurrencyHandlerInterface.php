<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\CommandHandler;

/**
 * Interface for service that handles cart currency updating
 */
interface UpdateCartCurrencyHandlerInterface
{
    /**
     * @param UpdateCartCurrencyCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Cart\Command\UpdateCartCurrencyCommand $command): void;
}
