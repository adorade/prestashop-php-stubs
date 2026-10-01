<?php

namespace PrestaShop\PrestaShop\Adapter\Discount\Validate;

/**
 * This validator is used for the new Discount domain, but it still relies on the legacy CartRule ObjectModel.
 */
class DiscountValidator extends \PrestaShop\PrestaShop\Adapter\AbstractObjectModelValidator
{
    use \PrestaShop\PrestaShop\Adapter\Discount\Trait\ProductConditionsTrait;
    protected ?\PrestaShop\PrestaShop\Adapter\Discount\Repository\DiscountRepository $discountRepository = null;
    public function __construct(private readonly \PrestaShop\PrestaShop\Adapter\Product\Repository\ProductRepository $productRepository, private readonly \PrestaShop\PrestaShop\Adapter\Product\Combination\Repository\CombinationRepository $combinationRepository, private readonly \PrestaShop\PrestaShop\Adapter\Carrier\Repository\CarrierRepository $carrierRepository, private readonly \PrestaShop\PrestaShop\Adapter\Manufacturer\Repository\ManufacturerRepository $manufacturerRepository, private readonly \PrestaShop\PrestaShop\Adapter\Attribute\Repository\AttributeRepository $attributeRepository, private readonly \PrestaShop\PrestaShop\Adapter\Supplier\Repository\SupplierRepository $supplierRepository, private readonly \PrestaShop\PrestaShop\Adapter\Category\Repository\CategoryRepository $categoryRepository, private readonly \PrestaShop\PrestaShop\Adapter\Country\Repository\CountryRepository $countryRepository, private readonly \PrestaShop\PrestaShop\Adapter\Customer\Group\Repository\GroupRepository $groupRepository, private readonly \PrestaShop\PrestaShop\Adapter\Feature\Repository\FeatureValueRepository $featureValueRepository)
    {
    }
    /**
     * Repository is injected via a setter to avoid circular injection problems
     */
    public function setDiscountRepository(\PrestaShop\PrestaShop\Adapter\Discount\Repository\DiscountRepository $discountRepository): void
    {
    }
    public function validate(\CartRule $cartRule): void
    {
    }
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Discount\ProductRuleGroup[]|null $productConditions
     * @param int[]|null $carrierIds
     * @param int[]|null $countryIds
     * @param int[]|null $customerGroupIds
     */
    public function validateAssociations(?array $productConditions = null, ?array $carrierIds = null, ?array $countryIds = null, ?array $customerGroupIds = null): void
    {
    }
    /**
     * @throws \PrestaShop\PrestaShop\Core\Domain\Discount\Exception\DiscountConstraintException
     */
    public function validateDiscountPropertiesForType(\CartRule $discount, ?array $productConditions): void
    {
    }
}
