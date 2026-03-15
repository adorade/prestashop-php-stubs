<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\CommandBuilder\Product;

final class CarriersCommandsBuilder implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\CommandBuilder\Product\ProductCommandsBuilderInterface
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
