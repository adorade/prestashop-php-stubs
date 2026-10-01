<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject;

class ShopCollection extends \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
{
    /**
     * @var ShopId[]|null
     */
    protected ?array $shopIds = null;
    /**
     * Constraint to target a list of shops.
     *
     * @param int[] $shopIds
     *
     * @return static
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shop\Exception\ShopException
     */
    public static function shops(array $shopIds): self
    {
    }
    /**
     * @param int|null $shopId
     * @param int|null $shopGroupId
     * @param bool $strict
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shop\Exception\ShopException
     */
    protected function __construct(?int $shopId, ?int $shopGroupId, bool $strict = false, ?array $shopIds = null)
    {
    }
    /**
     * @return ShopId[]|null
     */
    public function getShopIds(): ?array
    {
    }
    public function hasShopIds(): bool
    {
    }
    /**
     * @return bool
     */
    public function forAllShops(): bool
    {
    }
    /**
     * Clone the constraint, you can specify a force $strict value, but it will always remain false.
     *
     * @param bool|null $strict
     *
     * @return static
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shop\Exception\ShopException
     */
    public function clone(?bool $strict = null): self
    {
    }
    public function isEqual(\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $constraint): bool
    {
    }
}
