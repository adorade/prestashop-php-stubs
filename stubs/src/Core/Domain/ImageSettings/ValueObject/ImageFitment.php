<?php

namespace PrestaShop\PrestaShop\Core\Domain\ImageSettings\ValueObject;

/**
 * Defines supported image fitment values for the ImageSettings domain.
 */
final class ImageFitment
{
    public const FIT = 'fit';
    public const CROP = 'crop';
    public const BOUND = 'bound';
    public const AVAILABLE_VALUES = [self::FIT, self::CROP, self::BOUND];
    /**
     * Asserts that the provided image fitment is supported.
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\ImageSettings\Exception\InvalidImageFitmentException
     */
    public static function assertIsValid(string $imageFitment): void
    {
    }
}
