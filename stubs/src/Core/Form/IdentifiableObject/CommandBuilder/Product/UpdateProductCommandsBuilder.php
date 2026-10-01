<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\CommandBuilder\Product;

/**
 * Builds @see UpdateProductCommand for both single and All shops
 */
class UpdateProductCommandsBuilder implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\CommandBuilder\Product\ProductCommandsBuilderInterface
{
    /**
     * @param string $modifyAllNamePrefix
     */
    public function __construct(string $modifyAllNamePrefix)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildCommands(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, array $formData, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $singleShopConstraint): array
    {
    }
}
