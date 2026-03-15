<?php

namespace PrestaShop\PrestaShop\Adapter\Address\QueryHandler;

/**
 * Handles query which gets required fields for address
 *
 * @internal
 */
final class GetRequiredFieldsForAddressHandler extends \PrestaShop\PrestaShop\Adapter\Address\AbstractCustomerAddressHandler implements \PrestaShop\PrestaShop\Core\Domain\Address\QueryHandler\GetRequiredFieldsForAddressHandlerInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws AddressException
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Address\Query\GetRequiredFieldsForAddress $query): array
    {
    }
}
