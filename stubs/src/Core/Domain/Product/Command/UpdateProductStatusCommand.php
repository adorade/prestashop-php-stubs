<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Command;

/**
 * Class UpdateProductStatusCommand update a given product status
 *
 * @deprecated since 8.1 and will be removed in next major version.
 */
class UpdateProductStatusCommand
{
    /**
     * UpdateProductStatusCommand constructor.
     *
     * @param int $productId
     * @param bool $enable
     */
    public function __construct(int $productId, bool $enable)
    {
    }
    /**
     * @return ProductId
     */
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    /**
     * @return bool
     */
    public function getEnable(): bool
    {
    }
}
