<?php

namespace PrestaShopBundle\Api\Resource;

/**
 * DTO used to get necessary informations when request the API about hook status
 *
 * @experimental
 */
class HookStatus
{
    /**
     * @return int
     */
    public function getId(): int
    {
    }
    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
    }
    /**
     * @return bool
     */
    public function isActive(): bool
    {
    }
    /**
     * @param bool $isActive
     */
    public function setActive(bool $isActive): void
    {
    }
}
