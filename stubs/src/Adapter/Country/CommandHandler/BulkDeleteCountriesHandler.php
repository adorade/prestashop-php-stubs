<?php

namespace PrestaShop\PrestaShop\Adapter\Country\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class BulkDeleteCountriesHandler extends \PrestaShop\PrestaShop\Core\Domain\AbstractBulkCommandHandler implements \PrestaShop\PrestaShop\Core\Domain\Country\CommandHandler\BulkDeleteCountriesHandlerInterface
{
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Country\Repository\CountryRepository $countryRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Country\Command\BulkDeleteCountriesCommand $command): void
    {
    }
}
