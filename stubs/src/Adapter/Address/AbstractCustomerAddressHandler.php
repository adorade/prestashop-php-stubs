<?php

namespace PrestaShop\PrestaShop\Adapter\Address;

abstract class AbstractCustomerAddressHandler extends \PrestaShop\PrestaShop\Adapter\Address\AbstractAddressHandler
{
    /**
     * @return string[]
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Address\Exception\AddressException
     */
    protected function getRequiredFields(): array
    {
    }
}
