<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\CommandBuilder\Product\Combination;

/**
 * Builds commands from command stock form type only fields related to StockAvailable
 */
class UpdateCombinationStockAvailableCommandsBuilder implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\CommandBuilder\Product\Combination\CombinationCommandsBuilderInterface
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
    public function buildCommands(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId, array $formData, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $singleShopConstraint): array
    {
    }
}
