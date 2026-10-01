<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\Command;

class UpdateCartAddressesCommand
{
    /**
     * @param int $cartId
     * @param int $newDeliveryAddressId
     * @param int $newInvoiceAddressId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Address\Exception\AddressConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Cart\Exception\CartConstraintException
     */
    public function __construct(int $cartId, int $newDeliveryAddressId, int $newInvoiceAddressId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Cart\ValueObject\CartId
     */
    public function getCartId(): \PrestaShop\PrestaShop\Core\Domain\Cart\ValueObject\CartId
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId
     */
    public function getNewDeliveryAddressId(): \PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId
     */
    public function getNewInvoiceAddressId(): \PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId
    {
    }
}
