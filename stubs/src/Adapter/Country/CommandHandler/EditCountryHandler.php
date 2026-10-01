<?php

namespace PrestaShop\PrestaShop\Adapter\Country\CommandHandler;

/**
 * Handles update of country and address format
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class EditCountryHandler implements \PrestaShop\PrestaShop\Core\Domain\Country\CommandHandler\EditCountryHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Country\Repository\CountryRepository $countryRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Country\Command\EditCountryCommand $command): void
    {
    }
}
