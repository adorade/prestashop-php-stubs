<?php

namespace PrestaShop\PrestaShop\Core\Domain\Country\CommandHandler;

interface BulkUpdateCountryZoneHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Country\Command\BulkUpdateCountryZoneCommand $command): void;
}
