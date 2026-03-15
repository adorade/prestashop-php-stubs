<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\CommandBuilder\Product;

/**
 * Builder used to build UpdateTypeCommand
 */
class TypeCommandsBuilder implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\CommandBuilder\Product\ProductCommandsBuilderInterface
{
    public function buildCommands(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, array $formData, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $singleShopConstraint): array
    {
    }
}
