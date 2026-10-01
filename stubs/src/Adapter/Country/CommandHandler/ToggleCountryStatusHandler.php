<?php

namespace PrestaShop\PrestaShop\Adapter\Country\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class ToggleCountryStatusHandler implements \PrestaShop\PrestaShop\Core\Domain\Country\CommandHandler\ToggleCountryStatusHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Country\Repository\CountryRepository $countryRepository)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Country\Command\ToggleCountryStatusCommand $command): void
    {
    }
}
