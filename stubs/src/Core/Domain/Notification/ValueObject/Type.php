<?php

namespace PrestaShop\PrestaShop\Core\Domain\Notification\ValueObject;

/**
 * Notifications types
 */
class Type
{
    public const ORDER = 'order';
    public const CUSTOMER = 'customer';
    public const CUSTOMER_MESSAGE = 'customer_message';
    /**
     * @param string $type
     *
     * @throws NotificationException
     */
    public function __construct(string $type)
    {
    }
    /**
     * @return string
     */
    public function getValue(): string
    {
    }
}
