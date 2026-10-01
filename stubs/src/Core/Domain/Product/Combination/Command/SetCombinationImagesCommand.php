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
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId
     */
    public function getCombinationId(): \PrestaShop\PrestaShop\Core\Domain\Product\Combination\ValueObject\CombinationId
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\Product\Image\ValueObject\ImageId[]
     */
    public function getImageIds(): array
    {
    }
}
