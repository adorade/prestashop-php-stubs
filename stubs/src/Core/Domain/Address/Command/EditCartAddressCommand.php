<?php

namespace PrestaShop\PrestaShop\Core\Domain\Address\Command;

/**
 * Class EditCartAddressCommand used to edit a cart address and then update the related field
 * so that it uses the new duplicated address.
 */
class EditCartAddressCommand extends \PrestaShop\PrestaShop\Core\Domain\Address\Command\AbstractEditAddressCommand
{
    public const ALLOWED_ADDRESS_TYPES = [\PrestaShop\PrestaShop\Core\Domain\Cart\CartAddressType::INVOICE_ADDRESS_TYPE, \PrestaShop\PrestaShop\Core\Domain\Cart\CartAddressType::DELIVERY_ADDRESS_TYPE];
    /**
     * @param int $cartId
     * @param string $addressType
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Cart\Exception\InvalidAddressTypeException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Cart\Exception\CartConstraintException
     */
    public function __construct(int $cartId, string $addressType)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Cart\ValueObject\CartId
     */
    public function getCartId(): \PrestaShop\PrestaShop\Core\Domain\Cart\ValueObject\CartId
    {
    }
    /**
     * @return string
     */
    public function getAddressType(): string
    {
    }
}
