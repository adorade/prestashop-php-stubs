<?php

namespace PrestaShop\PrestaShop\Core\Domain\Country\CommandHandler;

interface BulkDeleteCountriesHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Country\Command\BulkDeleteCountriesCommand $command): void;
}
