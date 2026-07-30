<?php

namespace PrestaShop\PrestaShop\Adapter\Zone\CommandHandler;

final class ToggleZoneStatusHandler implements \PrestaShop\PrestaShop\Core\Domain\Zone\CommandHandler\ToggleZoneStatusHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws ZoneException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Zone\Command\ToggleZoneStatusCommand $command): void
    {
    }
}
