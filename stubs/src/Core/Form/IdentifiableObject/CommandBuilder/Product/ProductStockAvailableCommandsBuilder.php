<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\CommandBuilder\Product;

/**
 * Builds following command for single and all shops:
 *
 * @see UpdateProductStockAvailableCommand
 */
class ProductStockAvailableCommandsBuilder implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\CommandBuilder\Product\ProductCommandsBuilderInterface
{
    /**
     * @param string $modifyAllNamePrefix
     */
    public function __construct(string $modifyAllNamePrefix)
    {
    }
    /**
     * @param ProductId $productId
     * @param array $formData
     * @param ShopConstraint $singleShopConstraint
     *
     * @return UpdateProductStockAvailableCommand[]
     */
    public function buildCommands(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, array $formData, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $singleShopConstraint): array
    {
    }
}
