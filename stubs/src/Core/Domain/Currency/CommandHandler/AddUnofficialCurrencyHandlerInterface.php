<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\CommandHandler;

/**
 * Interface AddUnofficialCurrencyHandlerInterface defines contract for AddUnofficialCurrencyHandler
 */
interface AddUnofficialCurrencyHandlerInterface
{
    /**
     * @param AddUnofficialCurrencyCommand $command
     *
     * @return CurrencyId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Currency\Command\AddUnofficialCurrencyCommand $command);
}
