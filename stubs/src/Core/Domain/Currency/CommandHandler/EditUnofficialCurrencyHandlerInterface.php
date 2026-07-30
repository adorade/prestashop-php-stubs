<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\CommandHandler;

/**
 * Interface EditUnofficialCurrencyHandlerInterface defines contract for UpdateCurrencyHandler.
 */
interface EditUnofficialCurrencyHandlerInterface
{
    /**
     * @param EditUnofficialCurrencyCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Currency\Command\EditUnofficialCurrencyCommand $command);
}
