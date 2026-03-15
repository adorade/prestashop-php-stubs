<?php

namespace PrestaShop\PrestaShop\Core\Domain\Country\CommandHandler;

/**
 * Defines a contract for AddCountryHandler
 */
interface AddCountryHandlerInterface
{
    /**
     * @param AddCountryCommand $command
     *
     * @return CountryId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Country\Command\AddCountryCommand $command): \PrestaShop\PrestaShop\Core\Domain\Country\ValueObject\CountryId;
}
