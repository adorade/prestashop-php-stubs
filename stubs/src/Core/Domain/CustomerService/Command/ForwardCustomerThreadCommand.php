<?php

namespace PrestaShop\PrestaShop\Core\Domain\CustomerService\Command;

/**
 * Forwards customer thread
 */
class ForwardCustomerThreadCommand
{
    /**
     * Creates command for forwarding customer thread for another employee
     *
     * @param int $customerThreadId
     * @param int $employeeId
     * @param string $comment
     *
     * @return self
     */
    public static function toAnotherEmployee($customerThreadId, $employeeId, $comment)
    {
    }
    /**
     * Creates command for forwarding customer thread for someone else (not employee)
     *
     * @param int $customerThreadId
     * @param string $email
     * @param string $comment
     *
     * @return ForwardCustomerThreadCommand
     */
    public static function toSomeoneElse($customerThreadId, $email, $comment)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Employee\ValueObject\EmployeeId|null
     */
    public function getEmployeeId()
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\CustomerService\ValueObject\CustomerThreadId
     */
    public function getCustomerThreadId()
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\ValueObject\Email|null
     */
    public function getEmail()
    {
    }
    /**
     * @return string
     */
    public function getComment()
    {
    }
    /**
     * @return bool
     */
    public function forwardToEmployee()
    {
    }
}
