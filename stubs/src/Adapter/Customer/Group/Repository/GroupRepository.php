<?php

namespace PrestaShop\PrestaShop\Adapter\Customer\Group\Repository;

/**
 * Provides methods to access Group data storage
 */
class GroupRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Customer\Group\ValueObject\GroupId $groupId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Customer\Group\Exception\GroupNotFoundException
     */
    public function assertGroupExists(\PrestaShop\PrestaShop\Core\Domain\Customer\Group\ValueObject\GroupId $groupId): void
    {
    }
}
