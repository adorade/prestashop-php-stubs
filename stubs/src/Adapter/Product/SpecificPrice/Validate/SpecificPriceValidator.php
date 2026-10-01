<?php

namespace PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\Validate;

/**
 * Validates SpecificPrice properties using legacy object model
 */
class SpecificPriceValidator extends \PrestaShop\PrestaShop\Adapter\AbstractObjectModelValidator
{
    /**
     * @param \PrestaShop\PrestaShop\Adapter\Shop\Repository\ShopGroupRepository $shopGroupRepository
     * @param \PrestaShop\PrestaShop\Adapter\Shop\Repository\ShopRepository $shopRepository
     * @param \PrestaShop\PrestaShop\Adapter\Product\Combination\Repository\CombinationRepository $combinationRepository
     * @param \PrestaShop\PrestaShop\Adapter\Currency\Repository\CurrencyRepository $currencyRepository
     * @param \PrestaShop\PrestaShop\Adapter\Country\Repository\CountryRepository $countryRepository
     * @param \PrestaShop\PrestaShop\Adapter\Customer\Group\Repository\GroupRepository $groupRepository
     * @param \PrestaShop\PrestaShop\Adapter\Customer\Repository\CustomerRepository $customerRepository
     * @param \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository
     * @param \PrestaShop\PrestaShop\Core\Util\Number\NumberExtractor $numberExtractor
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Shop\Repository\ShopGroupRepository $shopGroupRepository, \PrestaShop\PrestaShop\Adapter\Shop\Repository\ShopRepository $shopRepository, \PrestaShop\PrestaShop\Adapter\Product\Combination\Repository\CombinationRepository $combinationRepository, \PrestaShop\PrestaShop\Adapter\Currency\Repository\CurrencyRepository $currencyRepository, \PrestaShop\PrestaShop\Adapter\Country\Repository\CountryRepository $countryRepository, \PrestaShop\PrestaShop\Adapter\Customer\Group\Repository\GroupRepository $groupRepository, \PrestaShop\PrestaShop\Adapter\Customer\Repository\CustomerRepository $customerRepository, \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Core\Util\Number\NumberExtractor $numberExtractor)
    {
    }
    /**
     * @param \SpecificPrice $specificPrice
     *
     * @throws \PrestaShop\PrestaShop\Core\Exception\CoreException
     * @throws \PrestaShop\PrestaShop\Core\Domain\Product\SpecificPrice\Exception\SpecificPriceConstraintException
     */
    public function validate(\SpecificPrice $specificPrice): void
    {
    }
}
