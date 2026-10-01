<?php

namespace PrestaShop\PrestaShop\Core\Domain\ImageSettings\Command;

/**
 * Deletes image types on bulk action
 */
class BulkDeleteImageTypeCommand
{
    /**
     * @param array<int, int> $imageTypeIds
     */
    public function __construct(array $imageTypeIds)
    {
    }
    /**
     * @return array<int, \PrestaShop\PrestaShop\Core\Domain\ImageSettings\ValueObject\ImageTypeId>
     */
    public function getImageTypeIds(): array
    {
    }
}
