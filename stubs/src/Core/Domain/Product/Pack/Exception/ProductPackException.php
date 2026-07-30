<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Pack\Exception;

/**
 * Thrown when some product packing actions fails, also base exception of Product/Pack subdomain
 */
class ProductPackException extends \PrestaShop\PrestaShop\Core\Domain\Product\Exception\ProductException
{
    /**
     * When fails to add product to pack
     */
    public const FAILED_ADDING_TO_PACK = 10;
    /**
     * When fails to delete products from a pack
     */
    public const FAILED_DELETING_PRODUCTS_FROM_PACK = 20;
}
