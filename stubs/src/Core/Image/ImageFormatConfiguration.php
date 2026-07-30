<?php

namespace PrestaShop\PrestaShop\Core\Image;

class ImageFormatConfiguration implements \PrestaShop\PrestaShop\Core\Image\ImageFormatConfigurationInterface
{
    public const IMAGE_FORMAT_CONFIGURATION_KEY = 'PS_IMAGE_FORMAT';
    public const SUPPORTED_FORMATS = ['jpg', 'png', 'webp', 'avif'];
    public const DEFAULT_IMAGE_FORMAT = 'jpg';
    public function __construct(\PrestaShop\PrestaShop\Core\ConfigurationInterface $configuration)
    {
    }
    public function getGenerationFormats(): array
    {
    }
    public function addGenerationFormat(string $format): void
    {
    }
    public function setListOfGenerationFormats(array $formatList): void
    {
    }
    public function isGenerationFormatSet(string $format): bool
    {
    }
}
