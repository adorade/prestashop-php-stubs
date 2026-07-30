<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\QueryResult;

/**
 * Details about the entity used for product redirection (can be a product or a category)
 */
class ProductRedirectTarget
{
    public const PRODUCT_TYPE = 'product';
    public const CATEGORY_TYPE = 'category';
    /**
     * @param int $id
     * @param string $type
     * @param string $name
     * @param string $image
     */
    public function __construct(int $id, string $type, string $name, string $image)
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
    public function getType(): string
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
    public function getImage(): string
    {
    }
}
