<?php

namespace PrestaShop\PrestaShop\Core\Domain\Security\Command;

/**
 * Class DeleteCustomerSessionCommand is a command to delete customer session by given id.
 */
class DeleteCustomerSessionCommand
{
    /**
     * @param int $sessionId
     */
    public function __construct(int $sessionId)
    {
    }
    /**
     * @return CustomerSessionId
     */
    public function getCustomerSessionId(): \PrestaShop\PrestaShop\Core\Domain\Security\ValueObject\CustomerSessionId
    {
    }
}
