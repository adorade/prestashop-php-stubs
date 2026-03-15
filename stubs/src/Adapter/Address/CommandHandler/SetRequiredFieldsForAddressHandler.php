<?php

namespace PrestaShop\PrestaShop\Adapter\Address\CommandHandler;

/**
 * Handles command which sets required fields for address.
 *
 * @internal
 */
final class SetRequiredFieldsForAddressHandler implements \PrestaShop\PrestaShop\Core\Domain\Address\CommandHandler\SetRequiredFieldsForAddressHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws CannotSetRequiredFieldsForAddressException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Address\Command\SetRequiredFieldsForAddressCommand $command)
    {
    }
}
