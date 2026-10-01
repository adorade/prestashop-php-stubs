<?php

namespace PrestaShop\PrestaShop\Adapter\Zone\CommandHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class ToggleZoneStatusHandler implements \PrestaShop\PrestaShop\Core\Domain\Zone\CommandHandler\ToggleZoneStatusHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Zone\Exception\ZoneException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Zone\Command\ToggleZoneStatusCommand $command): void
    {
    }
}
