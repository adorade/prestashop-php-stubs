<?php

namespace PrestaShop\PrestaShop\Core\Domain\ImageSettings\Query;

/**
 * Gets image type for editing in back office
 */
class GetImageTypeForEditing
{
    /**
     * @param int $imageTypeId
     */
    public function __construct(int $imageTypeId)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\ImageSettings\ValueObject\ImageTypeId
     */
    public function getImageTypeId(): \PrestaShop\PrestaShop\Core\Domain\ImageSettings\ValueObject\ImageTypeId
    {
    }
}
