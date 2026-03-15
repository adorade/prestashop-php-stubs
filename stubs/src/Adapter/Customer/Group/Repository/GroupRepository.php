<?php

namespace PrestaShop\PrestaShop\Adapter\Customer\Group\Repository;

/**
 * Provides methods to access Group data storage
 */
class GroupRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * @param GroupId $groupId
     *
     * @throws GroupNotFoundException
     */
    public function assertGroupExists(\PrestaShop\PrestaShop\Core\Domain\Customer\Group\ValueObject\GroupId $groupId): void
    {
    }
}
