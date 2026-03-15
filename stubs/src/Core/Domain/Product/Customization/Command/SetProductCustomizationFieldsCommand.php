<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Customization\Command;

/**
 * Sets product customization fields
 */
class SetProductCustomizationFieldsCommand
{
    use \PrestaShop\PrestaShop\Core\Domain\Product\Customization\CustomizationShopConstraintTrait;
    /**
     * @param int $productId
     * @param array{'type': int, "localized_names": array<int, string>, "is_required": bool, "added_by_module": bool, "id"?: int|null}[] $customizationFields
     */
    public function __construct(int $productId, array $customizationFields, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint)
    {
    }
    /**
     * @return ProductId
     */
    public function getProductId(): \PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId
    {
    }
    /**
     * @return CustomizationField[]
     */
    public function getCustomizationFields(): array
    {
    }
    /**
     * @return ShopConstraint
     */
    public function getShopConstraint(): \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint
    {
    }
}
