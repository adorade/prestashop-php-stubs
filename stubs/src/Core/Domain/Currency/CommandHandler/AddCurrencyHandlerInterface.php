<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\CommandHandler;

/**
 * Interface AddCurrencyHandlerInterface defines contract for AddOfficialCurrencyHandler
 */
interface AddCurrencyHandlerInterface
{
    /**
     * @param AddCurrencyCommand $command
     *
     * @return CurrencyId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Currency\Command\AddCurrencyCommand $command);
}
