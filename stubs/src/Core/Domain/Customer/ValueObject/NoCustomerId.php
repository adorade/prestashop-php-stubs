<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject;

/**
 * Provides state id
 */
class NoCustomerId implements \PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject\CustomerIdInterface
{
    /**
     * @var int
     */
    public const NO_CUSTOMER_ID_VALUE = 0;
    /**
     * @return int
     */
    public function getValue(): int
    {
    }
}
