<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shop\QueryResult;

/**
 * Holds data of a shop found via a SearchShop query
 */
class FoundShop
{
    /**
     * FoundShop constructor.
     *
     * @param int $id
     * @param string $color
     * @param string $name
     * @param int $groupId
     * @param string $groupName
     */
    public function __construct(int $id, string $color, string $name, int $groupId, string $groupName, string $groupColor)
    {
    }
    public function getId(): int
    {
    }
    public function getColor(): string
    {
    }
    public function getName(): string
    {
    }
    public function getGroupId(): int
    {
    }
    public function getGroupName(): string
    {
    }
    public function getGroupColor(): string
    {
    }
}
