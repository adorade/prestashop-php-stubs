<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\Command;

/**
 * Updates category position
 */
class UpdateCategoryPositionCommand
{
    /**
     * @param int $categoryId
     * @param int $parentCategoryId
     * @param int $way
     * @param array $positions
     * @param bool $foundFirst
     */
    public function __construct($categoryId, $parentCategoryId, $way, array $positions, $foundFirst)
    {
    }
    /**
     * @return CategoryId
     */
    public function getCategoryId()
    {
    }
    /**
     * @return CategoryId
     */
    public function getParentCategoryId()
    {
    }
    /**
     * @return int
     */
    public function getWay()
    {
    }
    /**
     * @return array
     */
    public function getPositions()
    {
    }
    /**
     * @return bool
     */
    public function isFoundFirst()
    {
    }
}
