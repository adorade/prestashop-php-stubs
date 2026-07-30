<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\Command;

class EditSpecificPriceCommand
{
    /**
     * @param int $specificPriceId
     */
    public function __construct(int $specificPriceId)
    {
    }
    /**
     * @return SpecificPriceId
     */
    public function getSpecificPriceId(): \PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\ValueObject\SpecificPriceId
    {
    }
    /**
     * @return Reduction|null
     */
    public function getReduction(): ?\PrestaShop\PrestaShop\Core\Domain\ValueObject\Reduction
    {
    }
    /**
     * @param string $reductionType
     * @param string $reductionValue
     *
     * @return EditSpecificPriceCommand
     */
    public function setReduction(string $reductionType, string $reductionValue): self
    {
    }
    /**
     * @return bool|null
     */
    public function includesTax(): ?bool
    {
    }
    /**
     * @param bool $includesTax
     *
     * @return EditSpecificPriceCommand
     */
    public function setIncludesTax(bool $includesTax): self
    {
    }
    /**
     * @return FixedPriceInterface|null
     */
    public function getFixedPrice(): ?\PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\ValueObject\FixedPriceInterface
    {
    }
    /**
     * @param string $fixedPrice
     *
     * @return EditSpecificPriceCommand
     */
    public function setFixedPrice(string $fixedPrice): self
    {
    }
    /**
     * @return int|null
     */
    public function getFromQuantity(): ?int
    {
    }
    /**
     * @param int $fromQuantity
     *
     * @return EditSpecificPriceCommand
     */
    public function setFromQuantity(int $fromQuantity): self
    {
    }
    /**
     * @return ShopIdInterface|null
     */
    public function getShopId(): ?\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopIdInterface
    {
    }
    /**
     * @param int $shopId
     *
     * @return EditSpecificPriceCommand
     */
    public function setShopId(int $shopId): self
    {
    }
    /**
     * @return CombinationIdInterface|null
     */
    public function getCombinationId(): ?\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationIdInterface
    {
    }
    /**
     * @param int $combinationId
     *
     * @return EditSpecificPriceCommand
     */
    public function setCombinationId(int $combinationId): self
    {
    }
    /**
     * @return CurrencyIdInterface|null
     */
    public function getCurrencyId(): ?\PrestaShop\PrestaShop\Core\Domain\Currency\ValueObject\CurrencyIdInterface
    {
    }
    /**
     * @param int $currencyId
     *
     * @return EditSpecificPriceCommand
     */
    public function setCurrencyId(int $currencyId): self
    {
    }
    /**
     * @return int|null
     */
    public function getCountryId(): ?int
    {
    }
    /**
     * @param int $countryId
     *
     * @return EditSpecificPriceCommand
     */
    public function setCountryId(int $countryId): self
    {
    }
    /**
     * @return GroupIdInterface|null
     */
    public function getGroupId(): ?\PrestaShop\PrestaShop\Core\Domain\Customer\Group\ValueObject\GroupIdInterface
    {
    }
    /**
     * @param int $groupId
     *
     * @return EditSpecificPriceCommand
     */
    public function setGroupId(int $groupId): self
    {
    }
    /**
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
    }
    /**
     * @param int $customerId
     *
     * @return EditSpecificPriceCommand
     */
    public function setCustomerId(int $customerId): self
    {
    }
    /**
     * @return DateTimeInterface|null
     */
    public function getDateTimeFrom(): ?\DateTimeInterface
    {
    }
    /**
     * @param DateTimeInterface $dateTimeFrom
     *
     * @return EditSpecificPriceCommand
     */
    public function setDateTimeFrom(\DateTimeInterface $dateTimeFrom): self
    {
    }
    /**
     * @return DateTimeInterface|null
     */
    public function getDateTimeTo(): ?\DateTimeInterface
    {
    }
    /**
     * @param DateTimeInterface $dateTimeTo
     *
     * @return EditSpecificPriceCommand
     */
    public function setDateTimeTo(\DateTimeInterface $dateTimeTo): self
    {
    }
}
