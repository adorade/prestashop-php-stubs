<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\CommandHandler;

/**
 * Defines contract to handle @see GenerateProductCombinationsCommand
 */
interface GenerateProductCombinationsHandlerInterface
{
    /**
     * @param \PrestaShop\PrestaShop\Core\Domain\Product\Combination\Command\GenerateProductCombinationsCommand $command
     *
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId[]
     */
    public function handle(\PrestaShop\PrestaShop\Core\Domain\Product\Combination\Command\GenerateProductCombinationsCommand $command): array;
}
