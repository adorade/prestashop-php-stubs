<?php

namespace PrestaShop\PrestaShop\Core\Domain\Country\CommandHandler;

/**
 * Defines a contract for AddCountryHandler
 */
interface AddCountryHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Country\Command\AddCountryCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Country\Command\AddCountryCommand $command): \PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId;
}
