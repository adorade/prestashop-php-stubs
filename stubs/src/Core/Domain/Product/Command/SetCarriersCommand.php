<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Command;

/**
 * Set the list of carriers for a product
 */
class SetCarriersCommand
{
    /**
     * @param int $productId
     * @param int[] $carrierReferenceIds List of carrier reference IDs (instead of usual primary id as most entities)
     * @param ShopConstraint $shopConstraint
     *
     * @throws ProductConstraintException
     */
    public function __construct(int $productId, array $carrierReferenceIds, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint)
    {
    }
    /**
     * @return ProductId
     */
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    /**
     * @return ShopConstraint
     */
    public function getShopConstraint(): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
    {
    }
    /**
     * @return CarrierReferenceId[]
     */
    public function getCarrierReferenceIds(): ?array
    {
    }
}
