<?php

namespace PrestaShop\PrestaShop\Adapter\Currency\CommandHandler;

/**
 * Class ToggleCurrencyStatusHandler is responsible for toggling currency status.
 *
 * @internal
 */
final class ToggleCurrencyStatusHandler implements \PrestaShop\PrestaShop\Core\Domain\Currency\CommandHandler\ToggleCurrencyStatusHandlerInterface
{
    /**
     * @param int $defaultCurrencyId
     */
    public function __construct($defaultCurrencyId)
    {
    }
    /**
     * {@inheritdoc}
     *
     * @throws CurrencyException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Currency\Command\ToggleCurrencyStatusCommand $command)
    {
    }
}
