<?php

namespace PrestaShop\PrestaShop\Core\Domain\Cart\Command;

class UpdateCartAddressesCommand
{
    /**
     * @param int $cartId
     * @param int $newDeliveryAddressId
     * @param int $newInvoiceAddressId
     *
     * @throws AddressConstraintException
     * @throws CartConstraintException
     */
    public function __construct(int $cartId, int $newDeliveryAddressId, int $newInvoiceAddressId)
    {
    }
    /**
     * @return CartId
     */
    public function getCartId(): \PrestaShop\PrestaShop\Core\Domain\Cart\ValueObject\CartId
    {
    }
    /**
     * @return AddressId
     */
    public function getNewDeliveryAddressId(): \PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId
    {
    }
    /**
     * @return AddressId
     */
    public function getNewInvoiceAddressId(): \PrestaShop\PrestaShop\Core\Domain\Address\ValueObject\AddressId
    {
    }
}
