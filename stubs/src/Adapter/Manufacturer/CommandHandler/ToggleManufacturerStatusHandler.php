<?php

namespace PrestaShop\PrestaShop\Adapter\Manufacturer\CommandHandler;

/**
 * Handles command which toggles manufacturer status
 */
#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsCommandHandler]
final class ToggleManufacturerStatusHandler extends \PrestaShop\PrestaShop\Adapter\Manufacturer\CommandHandler\AbstractManufacturerCommandHandler implements \PrestaShop\PrestaShop\Core\Domain\Manufacturer\CommandHandler\ToggleManufacturerStatusHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Manufacturer\Command\ToggleManufacturerStatusCommand $command)
    {
    }
}
