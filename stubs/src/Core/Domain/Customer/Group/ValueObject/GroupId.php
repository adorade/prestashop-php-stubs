<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\Group\ValueObject;

/**
 * Holds group identification value
 */
class GroupId implements \PrestaShop\PrestaShop\Core\Domain\Customer\Group\ValueObject\GroupIdInterface
{
    /**
     * @param int $groupId
     */
    public function __construct(int $groupId)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function getValue(): int
    {
    }
}
