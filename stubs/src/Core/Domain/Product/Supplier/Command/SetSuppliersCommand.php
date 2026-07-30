<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Supplier\Command;

/**
 * This command is used to set (or assign) suppliers to a product It is used for both product with or without
 * combinations and only defines the association not the content themselves. To update contents you need to use
 * UpdateProductSuppliersCommand or UpdateCombinationSuppliersCommand one you have correctly set the associations
 * with this command.
 *
 * When no default supplier was associated this command will automatically use the first provided one, however
 * to change it to your need you can use SetProductDefaultSupplierCommand.
 */
class SetSuppliersCommand
{
    /**
     * @param int $productId
     * @param array $supplierIds
     */
    public function __construct(int $productId, array $supplierIds)
    {
    }
    /**
     * @return ProductId
     */
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    /**
     * @return SupplierId[]
     */
    public function getSupplierIds(): array
    {
    }
}
