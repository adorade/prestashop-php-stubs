<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\CommandHandler;

/**
 * Interface DeleteCurrencyHandlerInterface defines contract for DeleteCurrencyHandler.
 */
interface DeleteCurrencyHandlerInterface
{
    /**
     * Handles the deletion logic of currency.
     *
     * @param DeleteCurrencyCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Currency\Command\DeleteCurrencyCommand $command);
}
