<?php

namespace PrestaShop\PrestaShop\Adapter\Address\CommandHandler;

/**
 * Handles command which deletes address
 */
final class DeleteAddressHandler extends \PrestaShop\PrestaShop\Adapter\Address\AbstractAddressHandler implements \PrestaShop\PrestaShop\Core\Domain\Address\CommandHandler\DeleteAddressHandlerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Address\Command\DeleteAddressCommand $command)
    {
    }
}
