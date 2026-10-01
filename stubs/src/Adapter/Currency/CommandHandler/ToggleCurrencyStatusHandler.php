<?php

namespace PrestaShop\PrestaShop\Adapter\Currency\CommandHandler;

/**
 * Class ToggleCurrencyStatusHandler is responsible for toggling currency status.
 *
 * @internal
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
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
     * @throws \PrestaShop\PrestaShop\Core\Domain\Currency\Exception\CurrencyException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Currency\Command\ToggleCurrencyStatusCommand $command)
    {
    }
}
