<?php

namespace PrestaShop\PrestaShop\Core\Product\Search\Exception;

/**
 * Thrown when sort order direction is not valid
 */
class InvalidSortOrderDirectionException extends \PrestaShop\PrestaShop\Core\Exception\CoreException
{
    /**
     * @param string $direction the invalid direction
     */
    public function __construct($direction)
    {
    }
}
