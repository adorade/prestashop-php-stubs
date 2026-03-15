<?php

namespace PrestaShop\PrestaShop\Adapter\Address;

abstract class AbstractCustomerAddressHandler extends \PrestaShop\PrestaShop\Adapter\Address\AbstractAddressHandler
{
    /**
     * @return string[]
     *
     * @throws AddressException
     */
    protected function getRequiredFields(): array
    {
    }
}
