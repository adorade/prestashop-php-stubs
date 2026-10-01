<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\CommandBuilder\Product\Combination;

class CombinationCommandsBuilder implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\CommandBuilder\Product\Combination\CombinationCommandsBuilderInterface
{
    /**
     * @param iterable<CombinationCommandsBuilderInterface> $commandBuilders
     */
    public function __construct(iterable $commandBuilders)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function buildCommands(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId, array $formData, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $singleShopConstraint): array
    {
    }
}
