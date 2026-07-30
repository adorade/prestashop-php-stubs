<?php

namespace PrestaShop\PrestaShop\Core\Domain\Security\ValueObject;

/**
 * Class CustomerSessionId
 */
class CustomerSessionId
{
    /**
     * @param int $sessionId
     *
     * @throws SessionException
     */
    public function __construct(int $sessionId)
    {
    }
    /**
     * @return int
     */
    public function getValue(): int
    {
    }
}
