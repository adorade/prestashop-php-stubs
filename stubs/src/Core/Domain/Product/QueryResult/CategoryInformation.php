<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\QueryResult;

/**
 * Information about category
 */
class CategoryInformation
{
    /**
     * @param int $id
     * @param string $name
     * @param string $displayName
     */
    public function __construct(int $id, string $name, string $displayName)
    {
    }
    /**
     * @return int
     */
    public function getId(): int
    {
    }
    /**
     * @return string
     */
    public function getName(): string
    {
    }
    /**
     * @return string
     */
    public function getDisplayName(): string
    {
    }
}
