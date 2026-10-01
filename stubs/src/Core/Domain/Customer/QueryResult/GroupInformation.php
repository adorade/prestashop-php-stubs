<?php

namespace PrestaShop\PrestaShop\Core\Domain\Customer\QueryResult;

/**
 * Class GroupInformation holds customer group information.
 */
class GroupInformation
{
    /**
     * @param int $groupId
     * @param string $name
     * @param bool $isDefault
     */
    public function __construct(int $groupId, string $name, bool $isDefault = false)
    {
    }
    /**
     * @return int
     */
    public function getGroupId(): int
    {
    }
    /**
     * @return string
     */
    public function getName(): string
    {
    }
    /**
     * @return bool
     */
    public function isDefault(): bool
    {
    }
}
