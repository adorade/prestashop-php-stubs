<?php

namespace PrestaShop\PrestaShop\Adapter\Customer;

/**
 * This class will provide data from DB / ORM about Customer.
 */
class CustomerDataProvider
{
    /**
     * @param int $id
     *
     * @throws LogicException If the customer id is not set
     *
     * @return object customer
     */
    public function getCustomer($id)
    {
    }
    public function getIdByEmail(string $email)
    {
    }
    /**
     * @param int $customerId
     * @param int $langId
     *
     * @return array
     */
    public function getCustomerAddresses($customerId, $langId)
    {
    }
    /**
     * Get Default Customer Group ID.
     *
     * @param int $idCustomer Customer ID
     *
     * @return mixed|string|null
     */
    public function getDefaultGroupId($idCustomer)
    {
    }
    /**
     * Provides customer messages
     *
     * @param int $customerId
     */
    public function getCustomerMessages(int $customerId, ?int $orderId = null, ?int $limit = null)
    {
    }
}
