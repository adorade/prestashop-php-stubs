<?php

namespace PrestaShop\PrestaShop\Core\Domain\ImageSettings\Exception;

/**
 * Thrown when an image fitment value is not supported by the ImageSettings domain.
 */
class InvalidImageFitmentException extends \PrestaShop\PrestaShop\Core\Domain\ImageSettings\Exception\ImageTypeException
{
    /**
     * @param string $imageFitment Invalid image fitment value
     */
    public function __construct(string $imageFitment)
    {
    }
}
