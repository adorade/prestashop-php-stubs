<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\CommandBuilder\Product;

final class VirtualProductFileCommandsBuilder implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\CommandBuilder\Product\ProductCommandsBuilderInterface
{
    /**
     * {@inheritdoc}
     */
    public function buildCommands(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, array $formData, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $singleShopConstraint): array
    {
    }
    /**
     * @param ProductId $productId
     * @param array<string, mixed> $virtualProductFileData
     *
     * @return AddVirtualProductFileCommand|null
     */
    public function buildAddCommand(\PrestaShop\PrestaShop\Core\Domain\Product\ValueObject\ProductId $productId, array $virtualProductFileData): ?\PrestaShop\PrestaShop\Core\Domain\Product\VirtualProductFile\Command\AddVirtualProductFileCommand
    {
    }
}
