<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\Query;

/**
 * Retrieves carrier data
 */
class GetCarrierForEditing
{
    /**
     * @param int $carrierId
     */
    public function __construct(int $carrierId, private readonly \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId
     */
    public function getCarrierId(): \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId
    {
    }
    public function getShopConstraint(): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
    {
    }
}
