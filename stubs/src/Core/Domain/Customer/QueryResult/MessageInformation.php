<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\QueryResult;

/**
 * Class CustomerMessageInformation holds customer message information.
 */
class MessageInformation
{
    /**
     * @param int $customerThreadId
     * @param string $message
     * @param string $status
     * @param string $date
     */
    public function __construct($customerThreadId, $message, $status, $date)
    {
    }
    /**
     * @return int
     */
    public function getCustomerThreadId()
    {
    }
    /**
     * @return string
     */
    public function getMessage()
    {
    }
    /**
     * @return string
     */
    public function getStatus()
    {
    }
    /**
     * @return string
     */
    public function getDate()
    {
    }
}
