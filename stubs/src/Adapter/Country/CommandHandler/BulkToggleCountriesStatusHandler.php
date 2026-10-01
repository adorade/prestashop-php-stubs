<?php

namespace PrestaShop\PrestaShop\Adapter\Country\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class BulkToggleCountriesStatusHandler extends \PrestaShop\PrestaShop\Core\Domain\AbstractBulkCommandHandler implements \PrestaShop\PrestaShop\Core\Domain\Country\CommandHandler\BulkToggleCountriesStatusHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Country\Repository\CountryRepository $countryRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Country\Command\BulkToggleCountriesStatusCommand $command): void
    {
    }
}
