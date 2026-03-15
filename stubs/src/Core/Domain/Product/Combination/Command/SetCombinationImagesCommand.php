<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\Combination\Command;

class SetCombinationImagesCommand
{
    /**
     * @param int $combinationId
     * @param array $imageIds
     */
    public function __construct(int $combinationId, array $imageIds)
    {
    }
    /**
     * @return CombinationId
     */
    public function getCombinationId(): \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId
    {
    }
    /**
     * @return ImageId[]
     */
    public function getImageIds(): array
    {
    }
}
