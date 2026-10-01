<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\QueryResult;

/**
 * Class CustomerInformation stores customer information for viewing in Back Office.
 */
class ViewableCustomer
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject\CustomerId $customerId
     * @param GeneralInformation $generalInformation
     * @param PersonalInformation $personalInformation
     * @param OrdersInformation $ordersInformation
     * @param CartInformation[] $cartsInformation
     * @param ProductsInformation $productsInformation
     * @param MessageInformation[] $messagesInformation
     * @param DiscountInformation[] $discountsInformation
     * @param SentEmailInformation[] $sentEmailsInformation
     * @param LastConnectionInformation[] $lastConnectionsInformation
     * @param GroupInformation[] $groupsInformation
     * @param AddressInformation[] $addressesInformation
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject\CustomerId $customerId, \PrestaShop\PrestaShop\Core\Domain\Customer\QueryResult\GeneralInformation $generalInformation, \PrestaShop\PrestaShop\Core\Domain\Customer\QueryResult\PersonalInformation $personalInformation, \PrestaShop\PrestaShop\Core\Domain\Customer\QueryResult\OrdersInformation $ordersInformation, array $cartsInformation, \PrestaShop\PrestaShop\Core\Domain\Customer\QueryResult\ProductsInformation $productsInformation, array $messagesInformation, array $discountsInformation, array $sentEmailsInformation, array $lastConnectionsInformation, array $groupsInformation, array $addressesInformation)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject\CustomerId
     */
    public function getCustomerId()
    {
    }
    /**
     * @return PersonalInformation
     */
    public function getPersonalInformation()
    {
    }
    /**
     * @return OrdersInformation
     */
    public function getOrdersInformation()
    {
    }
    /**
     * @deprecated Since 9.0.0 for performance reasons and returns only empty array.
     *
     * @return CartInformation[]
     */
    public function getCartsInformation()
    {
    }
    /**
     * @deprecated Since 9.0.0, returns empty ProductsInformation object with no data.
     *
     * @return ProductsInformation
     */
    public function getProductsInformation()
    {
    }
    /**
     * @return MessageInformation[]
     */
    public function getMessagesInformation()
    {
    }
    /**
     * @deprecated Since 9.0.0, returns only empty array.
     *
     * @return DiscountInformation[]
     */
    public function getDiscountsInformation()
    {
    }
    /**
     * @return SentEmailInformation[]
     */
    public function getSentEmailsInformation()
    {
    }
    /**
     * @return LastConnectionInformation[]
     */
    public function getLastConnectionsInformation()
    {
    }
    /**
     * @return GroupInformation[]
     */
    public function getGroupsInformation()
    {
    }
    /**
     * @deprecated Since 9.0.0, returns only empty array.
     *
     * @return AddressInformation[]
     */
    public function getAddressesInformation()
    {
    }
    /**
     * @return GeneralInformation
     */
    public function getGeneralInformation()
    {
    }
}
