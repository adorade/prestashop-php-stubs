<?php

namespace PrestaShop\PrestaShop\Core\Domain\CustomerService\Command;

/**
 * Reply to given customer thread
 */
class ReplyToCustomerThreadCommand
{
    /**
     * @param int $customerThreadId
     * @param string $replyMessage
     */
    public function __construct($customerThreadId, $replyMessage)
    {
    }
    /**
     * @return CustomerThreadId
     */
    public function getCustomerThreadId()
    {
    }
    /**
     * @return string
     */
    public function getReplyMessage()
    {
    }
}
