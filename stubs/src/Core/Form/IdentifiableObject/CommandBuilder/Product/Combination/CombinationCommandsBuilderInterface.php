<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\CommandBuilder\Product\Combination;

interface CombinationCommandsBuilderInterface
{
    /**
     * @param CombinationId $combinationId
     * @param array $formData
     * @param ShopConstraint $singleShopConstraint
     *
     * @return array Returns empty array if the required data for the command is absent
     */
    public function buildCommands(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId, array $formData, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $singleShopConstraint): array;
}
