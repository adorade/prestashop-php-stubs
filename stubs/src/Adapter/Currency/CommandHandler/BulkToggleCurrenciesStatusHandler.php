<?php

namespace PrestaShop\PrestaShop\Adapter\Currency\CommandHandler;

/**
 * Toggles multiple currencies status using legacy Currency object model
 *
 * @internal
 */
final class BulkToggleCurrenciesStatusHandler extends \PrestaShop\PrestaShop\Adapter\Currency\CommandHandler\AbstractCurrencyHandler implements \PrestaShop\PrestaShop\Core\Domain\Currency\CommandHandler\BulkToggleCurrenciesStatusHandlerInterface
{
    /**
     * @param int $defaultCurrencyId
     */
    public function __construct($defaultCurrencyId)
    {
    }
    /**
     * @param BulkToggleCurrenciesStatusCommand $command
     *
     * @throws BulkToggleCurrenciesException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Currency\Command\BulkToggleCurrenciesStatusCommand $command)
    {
    }
}
