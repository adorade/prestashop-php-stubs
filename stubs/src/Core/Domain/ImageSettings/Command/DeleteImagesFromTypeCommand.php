<?php

namespace PrestaShop\PrestaShop\Core\Domain\ImageSettings\Command;

/**
 * Delete images from defined image type
 */
class DeleteImagesFromTypeCommand
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
