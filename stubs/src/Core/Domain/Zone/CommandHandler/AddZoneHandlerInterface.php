<?php

namespace PrestaShop\PrestaShop\Core\Domain\Zone\CommandHandler;

/**
 * Interface for service that creates new zone
 */
interface AddZoneHandlerInterface
{
    /**
     * @param AddZoneCommand $command
     *
     * @return ZoneId
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Zone\Command\AddZoneCommand $command): \PrestaShop\PrestaShop\Core\Domain\Zone\ValueObject\ZoneId;
}
