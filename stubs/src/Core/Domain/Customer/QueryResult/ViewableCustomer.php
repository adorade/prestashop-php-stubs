<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\QueryResult;

/**
 * Class CustomerInformation stores customer information for viewing in Back Office.
 */
class ViewableCustomer
{
    /**
     * @param CustomerId $customerId
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
     * @return CustomerId
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
     * @return CartInformation[]
     */
    public function getCartsInformation()
    {
    }
    /**
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
