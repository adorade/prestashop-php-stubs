<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject;

class ShopConstraint
{
    /**
     * These are the legacy values used to define the shop context, kept here for backward compatibility
     */
    public const SHOP = 1;
    public const SHOP_GROUP = 2;
    public const ALL_SHOPS = 4;
    protected ?\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId $shopId = null;
    protected ?\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopGroupId $shopGroupId = null;
    /**
     * Indicate if the value returned matches the constraints strictly, else it fallbacks to Shop > Group > Global value
     *
     * @var bool
     */
    protected $strict;
    /**
     * Constraint to target a specific shop
     *
     * @param int $shopId
     * @param bool $isStrict
     *
     * @return static
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shop\Exception\ShopException
     */
    public static function shop(int $shopId, bool $isStrict = false): self
    {
    }
    /**
     * Constraint to target a specific shop group
     *
     * @param int $shopGroupId
     * @param bool $isStrict
     *
     * @return static
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shop\Exception\ShopException
     */
    public static function shopGroup(int $shopGroupId, bool $isStrict = false): self
    {
    }
    /**
     * Constraint to target all shops
     *
     * @param bool $isStrict
     *
     * @return static
     */
    public static function allShops(bool $isStrict = false): self
    {
    }
    /**
     * @param int|null $shopId
     * @param int|null $shopGroupId
     * @param bool $strict
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Shop\Exception\ShopException
     */
    protected function __construct(?int $shopId, ?int $shopGroupId, bool $strict = false)
    {
    }
    /**
     * Clone the constraint, you can specify a force $strict value, if not set the same value is kept.
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
    /**
     * @return ShopId|null
     */
    public function getShopId(): ?\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopId
    {
    }
    /**
     * @return ShopGroupId|null
     */
    public function getShopGroupId(): ?\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopGroupId
    {
    }
    /**
     * @return bool
     */
    public function forAllShops(): bool
    {
    }
    /**
     * @return bool
     */
    public function isStrict(): bool
    {
    }
    public function isEqual(self $constraint): bool
    {
    }
    public function isSingleShopContext(): bool
    {
    }
    public function isShopGroupContext(): bool
    {
    }
    public function isAllShopContext(): bool
    {
    }
}
