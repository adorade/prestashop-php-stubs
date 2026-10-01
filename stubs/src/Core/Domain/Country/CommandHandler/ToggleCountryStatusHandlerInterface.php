<?php

namespace PrestaShop\PrestaShop\Core\Domain\Country\CommandHandler;

interface ToggleCountryStatusHandlerInterface
{
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Country\Command\ToggleCountryStatusCommand $command): void;
}
