<?php

namespace PrestaShop\PrestaShop\Adapter\Zone\CommandHandler;

final class EditZoneHandler extends \PrestaShop\PrestaShop\Adapter\Domain\AbstractObjectModelHandler implements \PrestaShop\PrestaShop\Core\Domain\Zone\CommandHandler\EditZoneHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Zone\Exception\ZoneException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Zone\Command\EditZoneCommand $command): void
    {
    }
}
