<?php

namespace PrestaShop\PrestaShop\Adapter\OrderReturn\Repository;

class OrderReturnRepository extends \PrestaShop\PrestaShop\Core\Repository\AbstractObjectModelRepository
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\OrderReturn\Validator\OrderReturnValidator $orderReturnValidator
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\OrderReturn\Validator\OrderReturnValidator $orderReturnValidator)
    {
    }
    /**
     * Gets legacy OrderReturn
     *
     * @param \PrestaShop\PrestaShop\Core\Domain\OrderReturn\ValueObject\OrderReturnId $orderReturnId
     *
     * @return \OrderReturn
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\OrderReturn\Exception\OrderReturnException
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function get(\PrestaShop\PrestaShop\Core\Domain\OrderReturn\ValueObject\OrderReturnId $orderReturnId): \OrderReturn
    {
    }
    /**
     * @param \OrderReturn $orderReturn
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     */
    public function update(\OrderReturn $orderReturn): void
    {
    }
    /**
     * Deletes the merchandise return and its `order_return_detail` rows. The legacy
     * ObjectModel::delete() does not cascade to `order_return_detail`, so we wipe the
     * detail rows manually first to avoid orphans.
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\OrderReturn\Exception\OrderReturnException when the ObjectModel exists but delete() returns false
     */
    public function delete(\PrestaShop\PrestaShop\Core\Domain\OrderReturn\ValueObject\OrderReturnId $orderReturnId): void
    {
    }
    /**
     * Lists classic (non-customized) products attached to a return.
     *
     * Each row is the legacy associative array returned by Order::getProducts() augmented with
     * 'product_quantity' (sum of returned qty for that order line) and 'customizations'
     * (last id_customization seen — 0 when none). Keys match the indexes used by Order::getProducts().
     *
     * @return array<int, array<string, mixed>>
     */
    public function getProductsForReturn(\PrestaShop\PrestaShop\Core\Domain\OrderReturn\ValueObject\OrderReturnId $orderReturnId): array
    {
    }
    /**
     * Counts product lines (rows in `order_return_detail`) attached to a return.
     */
    public function countProductLines(\PrestaShop\PrestaShop\Core\Domain\OrderReturn\ValueObject\OrderReturnId $orderReturnId): int
    {
    }
    /**
     * Removes a single row from `order_return_detail`.
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\OrderReturn\Exception\DeleteProductFromOrderReturnException
     */
    public function deleteProductLine(\PrestaShop\PrestaShop\Core\Domain\OrderReturn\ValueObject\OrderReturnId $orderReturnId, \PrestaShop\PrestaShop\Core\Domain\OrderReturn\ValueObject\OrderReturnProductId $productId): void
    {
    }
    /**
     * Lists customized products attached to a return.
     *
     * Returns the legacy associative arrays produced by OrderReturn::getReturnedCustomizedProducts(),
     * each enriched with product_id, product_attribute_id, name, reference, id_address_delivery.
     *
     * @return array<int, array<string, mixed>>
     */
    public function getCustomizedProductsForReturn(\PrestaShop\PrestaShop\Core\Domain\OrderReturn\ValueObject\OrderReturnId $orderReturnId): array
    {
    }
}
