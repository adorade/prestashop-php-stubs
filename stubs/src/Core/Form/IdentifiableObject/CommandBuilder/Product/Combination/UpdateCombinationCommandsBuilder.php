<?php

namespace PrestaShop\PrestaShop\Core\Form\IdentifiableObject\CommandBuilder\Product\Combination;

/**
 * This command builder builds the unified UpdateCombinationCommand which includes many sub scopes of the combination
 * edition, to clarify the configuration each sub-domain is configured separately but in the end we use one config, one
 * builder and one command for the whole Combination fields updates.
 */
class UpdateCombinationCommandsBuilder implements \PrestaShop\PrestaShop\Core\Form\IdentifiableObject\CommandBuilder\Product\Combination\CombinationCommandsBuilderInterface
{
    /**
     * @param string $modifyAllNamePrefix
     */
    public function __construct(string $modifyAllNamePrefix)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function buildCommands(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId $combinationId, array $formData, \PrestaShop\PrestaShop\Core\Domain\Shop\ValueObject\ShopConstraint $singleShopConstraint): array
    {
    }
}
