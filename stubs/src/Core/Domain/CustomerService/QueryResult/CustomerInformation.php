<?php

namespace PrestaShop\PrestaShop\Core\Domain\CustomerService\QueryResult;

/**
 * Carries data about customer for customer thread
 */
class CustomerInformation
{
    /**
     * @param string $email
     *
     * @return self
     */
    public static function withEmailOnly($email)
    {
    }
    /**
     * @param int|null $customerId
     * @param string|null $firstName
     * @param string|null $lastName
     * @param string $email
     * @param int|null $validatedOrdersCount
     * @param string|null $validatedOrdersAmount
     * @param string|null $customerSinceDate
     */
    public function __construct($customerId, $firstName, $lastName, $email, $validatedOrdersCount, $validatedOrdersAmount, $customerSinceDate)
    {
    }
    /**
     * @return int|null
     */
    public function getCustomerId()
    {
    }
    /**
     * @return string|null
     */
    public function getFirstName()
    {
    }
    /**
     * @return string|null
     */
    public function getLastName()
    {
    }
    /**
     * @return string
     */
    public function getEmail()
    {
    }
    /**
     * @return int|null
     */
    public function getValidatedOrdersCount()
    {
    }
    /**
     * @return string|null
     */
    public function getValidatedOrdersAmount()
    {
    }
    /**
     * @return string|null
     */
    public function getCustomerSinceDate()
    {
    }
}
