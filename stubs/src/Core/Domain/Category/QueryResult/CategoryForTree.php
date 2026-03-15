<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\QueryResult;

class CategoryForTree
{
    /**
     * @param int $categoryId
     * @param bool $active
     * @param string $name,
     * @param string $displayName
     * @param CategoryForTree[] $children
     */
    public function __construct(int $categoryId, bool $active, string $name, string $displayName, array $children)
    {
    }
    /**
     * @return int
     */
    public function getCategoryId(): int
    {
    }
    /**
     * @return bool
     */
    public function getActive(): bool
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
    /**
     * @return CategoryForTree[]
     */
    public function getChildren(): array
    {
    }
}
