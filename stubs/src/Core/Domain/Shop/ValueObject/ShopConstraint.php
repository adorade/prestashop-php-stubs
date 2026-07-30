<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject;

class ShopConstraint
{
    /**
     * @var ShopId|null
     */
    protected $shopId;
    /**
     * @var ShopGroupId|null
     */
    protected $shopGroupId;
    /**
     * Indicate if the value returned matches the constraints strictly, else it fallbacks to Shop > Group > Global value
     *
     * @var bool
     */
    protected $strict;
    /**
     * Constraint to get configuration for a specific shop
     *
     * @param int $shopId
     * @param bool $isStrict
     *
     * @return static
     *
     * @throws ShopException
     */
    public static function shop(int $shopId, bool $isStrict = false): self
    {
    }
    /**
     * Constraint to get configuration for a specific shop group
     *
     * @param int $shopGroupId
     * @param bool $isStrict
     *
     * @return static
     *
     * @throws ShopException
     */
    public static function shopGroup(int $shopGroupId, bool $isStrict = false): self
    {
    }
    /**
     * Constraint to get configuration for all shops (the global value)
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
     * @throws ShopException
     */
    protected function __construct(?int $shopId, ?int $shopGroupId, bool $strict = false)
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
}
