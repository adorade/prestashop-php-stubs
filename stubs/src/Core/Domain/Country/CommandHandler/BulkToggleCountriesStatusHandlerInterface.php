<?php

namespace PrestaShop\PrestaShop\Core\Domain\Country\CommandHandler;

interface BulkToggleCountriesStatusHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Country\Command\BulkToggleCountriesStatusCommand $command): void;
}
