<?php

namespace PrestaShop\PrestaShop\Adapter\Currency\CommandHandler;

/**
 * Deletes currencies using legacy currency object model
 *
 * @internal
 */
final class BulkDeleteCurrenciesHandler extends \PrestaShop\PrestaShop\Adapter\Currency\CommandHandler\AbstractCurrencyHandler implements \PrestaShop\PrestaShop\Core\Domain\Currency\CommandHandler\BulkDeleteCurrenciesHandlerInterface
{
    /**
     * @param int $defaultCurrencyId
     */
    public function __construct(int $defaultCurrencyId)
    {
    }
    /**
     * @param BulkDeleteCurrenciesCommand $command
     *
     * @throws BulkDeleteCurrenciesException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Currency\Command\BulkDeleteCurrenciesCommand $command)
    {
    }
}
