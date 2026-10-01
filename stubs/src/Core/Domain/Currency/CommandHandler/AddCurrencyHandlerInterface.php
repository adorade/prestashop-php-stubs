<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\CommandHandler;

/**
 * Interface AddCurrencyHandlerInterface defines contract for AddOfficialCurrencyHandler
 */
interface AddCurrencyHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Currency\Command\AddCurrencyCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\CurrencyId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Currency\Command\AddCurrencyCommand $command);
}
