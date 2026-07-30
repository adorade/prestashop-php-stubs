<?php

namespace PrestaShop\PrestaShop\Adapter\Address\CommandHandler;

/**
 * Handles command which deletes addresses in bulk action
 */
final class BulkDeleteAddressHandler extends \PrestaShop\PrestaShop\Adapter\Address\AbstractAddressHandler implements \PrestaShop\PrestaShop\Core\Domain\Address\CommandHandler\BulkDeleteAddressHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws BulkDeleteAddressException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Address\Command\BulkDeleteAddressCommand $command)
    {
    }
}
