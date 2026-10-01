<?php

namespace PrestaShop\PrestaShop\Core\Context;

/**
 * This context service gives access to all contextual data related to shop.
 */
class ShopContext
{
    public function __construct(protected readonly \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint, protected int $id, protected string $name, protected int $shopGroupId, protected int $categoryId, protected string $themeName, protected string $color, protected string $physicalUri, protected string $virtualUri, protected string $domain, protected string $domainSSL, protected bool $active, protected bool $secured, protected array $associatedShopIds, protected bool $isMultiShopEnabled, protected bool $isMultiShopUsed, protected bool $groupSharingStocks, protected bool $groupSharingCustomers, protected bool $groupSharingOrders)
    {
    }
    public function getShopConstraint(): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
    {
    }
    public function isAllShopContext(): bool
    {
    }
    public function isShopGroupContext(): bool
    {
    }
    public function isSingleShopContext(): bool
    {
    }
    public function getId(): int
    {
    }
    public function getName(): string
    {
    }
    public function getShopGroupId(): int
    {
    }
    public function getCategoryId(): int
    {
    }
    public function getThemeName(): string
    {
    }
    public function getColor(): string
    {
    }
    public function isActive(): bool
    {
    }
    public function getPhysicalUri(): string
    {
    }
    public function getVirtualUri(): string
    {
    }
    public function getDomain(): string
    {
    }
    public function getDomainSSL(): string
    {
    }
    public function getBaseURI(): string
    {
    }
    public function getBaseURL(): string
    {
    }
    public function hasGroupSharingStocks(): bool
    {
    }
    public function hasGroupSharingCustomers(): bool
    {
    }
    public function hasGroupSharingOrders(): bool
    {
    }
    /**
     * @return int[]
     */
    public function getAssociatedShopIds(): array
    {
    }
    public function isMultiShopEnabled(): bool
    {
    }
    public function isMultiShopUsed(): bool
    {
    }
}
