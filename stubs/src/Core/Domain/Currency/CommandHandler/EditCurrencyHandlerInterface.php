<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\CommandHandler;

/**
 * Interface EditCurrencyHandlerInterface defines contract for UpdateCurrencyHandler.
 */
interface EditCurrencyHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Currency\Command\EditCurrencyCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Currency\Command\EditCurrencyCommand $command);
}
