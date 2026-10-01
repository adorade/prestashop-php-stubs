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
     * @param \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\Exception\ProductConstraintException
     */
    public function __construct(int $productId, array $carrierReferenceIds, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
     */
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
     */
    public function getShopConstraint(): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierReferenceId[]
     */
    public function getCarrierReferenceIds(): ?array
    {
    }
}
