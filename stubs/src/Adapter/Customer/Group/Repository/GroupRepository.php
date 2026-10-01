<?php

namespace PrestaShop\PrestaShop\Adapter\Customer\Group\Repository;

/**
 * Provides methods to access Group data storage
 */
class GroupRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractMultiShopObjectModelRepository
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Customer\Group\ValueObject\GroupId $customerGroupId
     *
     * @return \Group
     *
     * @throws \PrestaShop\PrestaShop\Adapter\CoreException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Customer\Group\Exception\GroupNotFoundException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\Customer\Group\ValueObject\GroupId $customerGroupId): \Group
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Customer\Group\ValueObject\GroupId $groupId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Customer\Group\Exception\GroupNotFoundException
     */
    public function assertGroupExists(\PrestaShop\PrestaShop\Core\Domain\Customer\Group\ValueObject\GroupId $groupId): void
    {
    }
    /**
     * @param \Group $customerGroup
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Customer\Group\ValueObject\GroupId
     *
     * @throws \PrestaShop\PrestaShop\Adapter\CoreException
     */
    public function create(\Group $customerGroup): \PrestaShop\PrestaShop\Core\Domain\Customer\Group\ValueObject\GroupId
    {
    }
    /**
     * @param int $customerGroupId
     *
     * @return int[]
     */
    public function getAssociatedShopIds(int $customerGroupId): array
    {
    }
    /**
     * @param \Group $customerGroup
     */
    public function partialUpdate(\Group $customerGroup, array $propertiesToUpdate): void
    {
    }
    public function delete(\PrestaShop\PrestaShop\Core\Domain\Customer\Group\ValueObject\GroupId $customerGroupId): void
    {
    }
}
