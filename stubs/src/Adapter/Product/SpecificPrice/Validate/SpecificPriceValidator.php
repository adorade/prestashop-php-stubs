<?php

namespace PrestaShop\PrestaShop\Adapter\Product\SpecificPrice\Validate;

/**
 * Validates SpecificPrice properties using legacy object model
 */
class SpecificPriceValidator extends \PrestaShop\PrestaShop\Adapter\AbstractObjectModelValidator
{
    /**
     * @param ShopGroupRepository $shopGroupRepository
     * @param ShopRepository $shopRepository
     * @param CombinationRepository $combinationRepository
     * @param CurrencyRepository $currencyRepository
     * @param CountryRepository $countryRepository
     * @param GroupRepository $groupRepository
     * @param CustomerRepository $customerRepository
     * @param ProductRepository $productRepository
     * @param NumberExtractor $numberExtractor
     */
    public function __construct(\PrestaShop\PrestaShop\Adapter\Shop\Repository\ShopGroupRepository $shopGroupRepository, \PrestaShop\PrestaShop\Adapter\Shop\Repository\ShopRepository $shopRepository, \PrestaShop\PrestaShop\Adapter\Product\Combination\Repository\CombinationRepository $combinationRepository, \PrestaShop\PrestaShop\Adapter\Currency\Repository\CurrencyRepository $currencyRepository, \PrestaShop\PrestaShop\Adapter\Country\Repository\CountryRepository $countryRepository, \PrestaShop\PrestaShop\Adapter\Customer\Group\Repository\GroupRepository $groupRepository, \PrestaShop\PrestaShop\Adapter\Customer\Repository\CustomerRepository $customerRepository, \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, \PrestaShop\PrestaShop\Core\Util\Number\NumberExtractor $numberExtractor)
    {
    }
    /**
     * @param SpecificPrice $specificPrice
     *
     * @throws CoreException
     * @throws SpecificPriceConstraintException
     */
    public function validate(\SpecificPrice $specificPrice): void
    {
    }
}
