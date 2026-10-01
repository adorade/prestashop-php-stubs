<?php

namespace PrestaShop\PrestaShop\Core\Domain\Country\CommandHandler;

/**
 * Defines a contract for AddCountryHandler
 */
interface AddCountryHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Country\Command\AddCountryCommand $command): \PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId;
}
