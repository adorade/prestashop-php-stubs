<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Customization;

/**
 * The customization field commands/queries only handles single shop use case, we didn't implement the allShops use case because
 * it was considered too complex to handle compared to the benefit. The "apply to all shops" boolean can't be assigned on the
 * command itself but on each contained CustomizationField in the command. Besides the association of customization fields is not
 * dependent to a specific shop they are common to all shops, and it only allows update the name field for a specific shop.
 *
 * A POC had been started in case the feature needs to evolve someday https://github.com/PrestaShop/PrestaShop/pull/27944
 */
trait CustomizationShopConstraintTrait
{
    /**
     * @param ShopConstraint $shopConstraint
     *
     * @throws InvalidShopConstraintException
     */
    protected function checkShopConstraint(\PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $shopConstraint): void
    {
    }
}
