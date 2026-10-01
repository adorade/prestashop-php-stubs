<?php

namespace PrestaShop\PrestaShop\Adapter\Country\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class BulkUpdateCountryZoneHandler extends \PrestaShop\PrestaShop\Core\Domain\AbstractBulkCommandHandler implements \PrestaShop\PrestaShop\Core\Domain\Country\CommandHandler\BulkUpdateCountryZoneHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Country\Repository\CountryRepository $countryRepository, private readonly \PrestaShop\PrestaShop\Adapter\Zone\Repository\ZoneRepository $zoneRepository)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Country\Command\BulkUpdateCountryZoneCommand $command): void
    {
    }
}
