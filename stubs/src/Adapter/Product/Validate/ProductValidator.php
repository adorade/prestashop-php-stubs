<?php

namespace PrestaShop\PrestaShop\Adapter\Product\Validate;

/**
 * Validates product field using legacy object model
 */
class ProductValidator extends \PrestaShop\PrestaShop\Adapter\AbstractObjectModelValidator
{
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\Configuration\ShopConfigurationInterface $configuration)
    {
    }
    /**
     * This method is specific for product creation only.
     *
     * @param \Product $product
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function validateCreation(\Product $product): void
    {
    }
    /**
     * Validates Product object model properties using legacy validation
     *
     * @param \Product $product
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Exception\ProductConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Pack\Exception\ProductPackConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Stock\Exception\ProductStockConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Exception\ProductConstraintException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Exception\ProductException
     */
    public function validate(\Product $product): void
    {
    }
}
