<?php

namespace PrestaShop\PrestaShop\Adapter\Currency\CommandHandler;

/**
 * Toggles multiple currencies status using legacy Currency object model
 *
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class BulkToggleCurrenciesStatusHandler extends \PrestaShop\PrestaShop\Adapter\Currency\CommandHandler\AbstractCurrencyHandler implements \PrestaShop\PrestaShop\Core\Domain\Currency\CommandHandler\BulkToggleCurrenciesStatusHandlerInterface
{
    /**
     * @param int $defaultCurrencyId
     */
    public function __construct($defaultCurrencyId)
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Currency\Command\BulkToggleCurrenciesStatusCommand $command
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Currency\Exception\BulkToggleCurrenciesException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Currency\Command\BulkToggleCurrenciesStatusCommand $command)
    {
    }
}
