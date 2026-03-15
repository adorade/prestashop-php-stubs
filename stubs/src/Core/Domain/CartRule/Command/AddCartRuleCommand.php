<?php

namespace PrestaShop\PrestaShop\Core\Domain\CartRule\Command;

/**
 * Adds new cart rule
 */
class AddCartRuleCommand
{
    /**
     * @param array $localizedNames
     * @param bool $highlightInCart
     * @param bool $allowPartialUse
     * @param int $priority
     * @param bool $isActive
     * @param DateTime $validFrom
     * @param DateTime $validTo
     * @param int $totalQuantity
     * @param int $quantityPerUser
     * @param CartRuleActionInterface $cartRuleAction
     * @param float $minimumAmount
     * @param int $minimumAmountCurrencyId
     * @param bool $isMinimumAmountTaxExcluded
     * @param bool $isMinimumAmountShippingExcluded
     *
     * @throws CartRuleConstraintException
     * @throws DomainConstraintException
     */
    public function __construct(array $localizedNames, bool $highlightInCart, bool $allowPartialUse, int $priority, bool $isActive, \DateTime $validFrom, \DateTime $validTo, int $totalQuantity, int $quantityPerUser, \PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\CartRuleAction\CartRuleActionInterface $cartRuleAction, float $minimumAmount, int $minimumAmountCurrencyId, bool $isMinimumAmountTaxExcluded, bool $isMinimumAmountShippingExcluded)
    {
    }
    /**
     * @return DiscountApplicationType|null
     */
    public function getDiscountApplicationType(): ?\PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\DiscountApplicationType
    {
    }
    /**
     * @param string $discountApplicationType
     *
     * @return AddCartRuleCommand
     *
     * @throws CartRuleConstraintException
     */
    public function setDiscountApplicationType(string $discountApplicationType): \PrestaShop\PrestaShop\Core\Domain\CartRule\Command\AddCartRuleCommand
    {
    }
    /**
     * @return ProductId|null
     */
    public function getDiscountProductId(): ?\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    /**
     * @param int $discountProductId
     *
     * @return AddCartRuleCommand
     */
    public function setDiscountProductId(int $discountProductId): \PrestaShop\PrestaShop\Core\Domain\CartRule\Command\AddCartRuleCommand
    {
    }
    /**
     * @return string
     */
    public function getDescription(): string
    {
    }
    /**
     * @return string
     */
    public function getCode(): string
    {
    }
    /**
     * @return MoneyAmountCondition
     */
    public function getMinimumAmountCondition(): \PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\MoneyAmountCondition
    {
    }
    /**
     * @return CustomerId|null
     */
    public function getCustomerId(): ?\PrestaShop\PrestaShop\Core\Domain\Customer\ValueObject\CustomerId
    {
    }
    /**
     * @return bool
     */
    public function hasCountryRestriction(): bool
    {
    }
    /**
     * @return bool
     */
    public function hasCarrierRestriction(): bool
    {
    }
    /**
     * @return bool
     */
    public function hasGroupRestriction(): bool
    {
    }
    /**
     * @return bool
     */
    public function hasCartRuleRestriction(): bool
    {
    }
    /**
     * @return bool
     */
    public function hasProductRestriction(): bool
    {
    }
    /**
     * @return bool
     */
    public function hasShopRestriction(): bool
    {
    }
    /**
     * @return array
     */
    public function getLocalizedNames(): array
    {
    }
    /**
     * @return bool
     */
    public function isHighlightInCart(): bool
    {
    }
    /**
     * @return bool
     */
    public function isAllowPartialUse(): bool
    {
    }
    /**
     * @return int
     */
    public function getPriority(): int
    {
    }
    /**
     * @return bool
     */
    public function isActive(): bool
    {
    }
    /**
     * @return DateTime
     */
    public function getValidFrom(): \DateTime
    {
    }
    /**
     * @return DateTime
     */
    public function getValidTo(): \DateTime
    {
    }
    /**
     * @return int
     */
    public function getTotalQuantity(): int
    {
    }
    /**
     * @return int
     */
    public function getQuantityPerUser(): int
    {
    }
    /**
     * @return CartRuleActionInterface
     */
    public function getCartRuleAction(): \PrestaShop\PrestaShop\Core\Domain\CartRule\ValueObject\CartRuleAction\CartRuleActionInterface
    {
    }
    /**
     * @param string $description
     *
     * @return AddCartRuleCommand
     */
    public function setDescription(string $description): \PrestaShop\PrestaShop\Core\Domain\CartRule\Command\AddCartRuleCommand
    {
    }
    /**
     * @param string $code
     *
     * @return AddCartRuleCommand
     */
    public function setCode(string $code): \PrestaShop\PrestaShop\Core\Domain\CartRule\Command\AddCartRuleCommand
    {
    }
    /**
     * @param int $customerId
     *
     * @return AddCartRuleCommand
     */
    public function setCustomerId(int $customerId): \PrestaShop\PrestaShop\Core\Domain\CartRule\Command\AddCartRuleCommand
    {
    }
    /**
     * @param bool $hasCountryRestriction
     *
     * @return AddCartRuleCommand
     */
    public function setHasCountryRestriction(bool $hasCountryRestriction): \PrestaShop\PrestaShop\Core\Domain\CartRule\Command\AddCartRuleCommand
    {
    }
    /**
     * @param bool $hasCarrierRestriction
     *
     * @return AddCartRuleCommand
     */
    public function setHasCarrierRestriction(bool $hasCarrierRestriction): \PrestaShop\PrestaShop\Core\Domain\CartRule\Command\AddCartRuleCommand
    {
    }
    /**
     * @param bool $hasGroupRestriction
     *
     * @return AddCartRuleCommand
     */
    public function setHasGroupRestriction(bool $hasGroupRestriction): \PrestaShop\PrestaShop\Core\Domain\CartRule\Command\AddCartRuleCommand
    {
    }
    /**
     * @param bool $hasCartRuleRestriction
     *
     * @return AddCartRuleCommand
     */
    public function setHasCartRuleRestriction(bool $hasCartRuleRestriction): \PrestaShop\PrestaShop\Core\Domain\CartRule\Command\AddCartRuleCommand
    {
    }
    /**
     * @param bool $hasProductRestriction
     *
     * @return AddCartRuleCommand
     */
    public function setHasProductRestriction(bool $hasProductRestriction): \PrestaShop\PrestaShop\Core\Domain\CartRule\Command\AddCartRuleCommand
    {
    }
    /**
     * @param bool $hasShopRestriction
     *
     * @return AddCartRuleCommand
     */
    public function setHasShopRestriction(bool $hasShopRestriction): \PrestaShop\PrestaShop\Core\Domain\CartRule\Command\AddCartRuleCommand
    {
    }
}
