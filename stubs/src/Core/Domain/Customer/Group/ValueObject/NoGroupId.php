<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\Group\ValueObject;

/**
 * Indicates that no group is specified
 */
class NoGroupId implements \PrestaShop\PrestaShop\Core\Domain\Customer\Group\ValueObject\GroupIdInterface
{
    /**
     * Value when no group is specified
     */
    public const NO_GROUP_ID = 0;
    /**
     * {@inheritDoc}
     */
    public function getValue(): int
    {
    }
}
