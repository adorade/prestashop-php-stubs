<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\Exception;

/**
 * Class CategoryNotFoundException.
 */
class CategoryNotFoundException extends \PrestaShop\PrestaShop\Core\Domain\Category\Exception\CategoryException
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryId $categoryId
     * @param string $message
     * @param int $code
     * @param \Exception $previous
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryId $categoryId, $message = '', $code = 0, $previous = null)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Category\ValueObject\CategoryId
     */
    public function getCategoryId()
    {
    }
}
