<?php

namespace PrestaShop\PrestaShop\Adapter\Zone\CommandHandler;

/**
 * Handles command that adds new zone.
 */
final class AddZoneHandler extends \PrestaShop\PrestaShop\Adapter\Domain\AbstractObjectModelHandler implements \PrestaShop\PrestaShop\Core\Domain\Zone\CommandHandler\AddZoneHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Zone\Command\AddZoneCommand $command): \PrestaShop\PrestaShop\Core\Domain\Zone\ValueObject\ZoneId
    {
    }
}
