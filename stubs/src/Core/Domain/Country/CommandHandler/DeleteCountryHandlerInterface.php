<?php

namespace PrestaShop\PrestaShop\Core\Domain\Country\CommandHandler;

/**
 * Interface for service that deletes country
 */
interface DeleteCountryHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Country\Command\DeleteCountryCommand $command
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Country\Command\DeleteCountryCommand $command): void;
}
