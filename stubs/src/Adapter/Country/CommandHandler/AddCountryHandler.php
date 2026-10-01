<?php

namespace PrestaShop\PrestaShop\Adapter\Country\CommandHandler;

/**
 * Handles creation of country and address format
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
class AddCountryHandler implements \PrestaShop\PrestaShop\Core\Domain\Country\CommandHandler\AddCountryHandlerInterface
{
    public function __construct(\PrestaShop\PrestaShop\Adapter\Country\Repository\CountryRepository $countryRepository)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Country\Command\AddCountryCommand $command): \PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId
    {
    }
}
