<?php

namespace PrestaShop\PrestaShop\Core\Domain\Country\CommandHandler;

/**
 * Defines a contract for EditCountryHandler
 */
interface EditCountryHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Country\Command\EditCountryCommand $command): void;
}
