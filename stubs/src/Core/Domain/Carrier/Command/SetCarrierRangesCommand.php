<?php

namespace PrestaShop\PrestaShop\Core\Domain\Carrier\Command;

/**
 * Command aim to edit carrier range
 */
class SetCarrierRangesCommand
{
    public function __construct(
        int $carrierId,
        /* @var array{
         *     id_zone: int,
         *     range_from: float,
         *     range_to: float,
         *     range_price: string,
         * }[] $ranges,
         */
        array $ranges,
        private readonly \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint
    )
    {
    }
    public function getCarrierId(): \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierId
    {
    }
    public function getRanges(): \PrestaShop\PrestaShop\Core\Domain\Carrier\ValueObject\CarrierRangesCollection
    {
    }
    public function getShopConstraint(): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
    {
    }
}
