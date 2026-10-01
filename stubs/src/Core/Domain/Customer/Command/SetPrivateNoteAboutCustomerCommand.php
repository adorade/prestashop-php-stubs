<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\Command;

/**
 * Sets private note about customer that can only be seen in Back Office
 */
class SetPrivateNoteAboutCustomerCommand
{
    /**
     * @param int $customerId
     * @param string $privateNote
     */
    public function __construct($customerId, $privateNote)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject\CustomerId
     */
    public function getCustomerId()
    {
    }
    /**
     * @return string
     */
    public function getPrivateNote()
    {
    }
}
