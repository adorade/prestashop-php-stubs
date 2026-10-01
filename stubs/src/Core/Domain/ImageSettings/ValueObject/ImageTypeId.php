<?php

namespace PrestaShop\PrestaShop\Core\Domain\ImageSettings\ValueObject;

/**
 * Defines Image Type ID with it's constraints
 */
class ImageTypeId
{
    /**
     * @param int $imageTypeId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\ImageSettings\Exception\ImageTypeException
     */
    public function __construct(int $imageTypeId)
    {
    }
    /**
     * @return int
     */
    public function getValue(): int
    {
    }
}
