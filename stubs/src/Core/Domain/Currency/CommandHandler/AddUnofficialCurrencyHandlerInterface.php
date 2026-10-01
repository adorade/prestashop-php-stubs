<?php

namespace PrestaShop\PrestaShop\Core\Domain\Currency\CommandHandler;

/**
 * Interface AddUnofficialCurrencyHandlerInterface defines contract for AddUnofficialCurrencyHandler
 */
interface AddUnofficialCurrencyHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Currency\Command\AddUnofficialCurrencyCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\CurrencyId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Currency\Command\AddUnofficialCurrencyCommand $command);
}
