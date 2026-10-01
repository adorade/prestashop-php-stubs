<?php

namespace PrestaShop\PrestaShop\Core\Domain\ImageSettings\QueryResult;

/**
 * Transfers image settings data for editing
 */
class EditableImageSettings
{
    public function __construct(private readonly string $formats, private readonly string $baseFormat, private readonly int $avifQuality, private readonly int $jpegQuality, private readonly int $pngQuality, private readonly int $webpQuality, private readonly int $generationMethod, private readonly int $pictureMaxSize, private readonly int $pictureMaxWidth, private readonly int $pictureMaxHeight)
    {
    }
    public function getFormats(): array
    {
    }
    public function getBaseFormat(): string
    {
    }
    public function getAvifQuality(): int
    {
    }
    public function getJpegQuality(): int
    {
    }
    public function getPngQuality(): int
    {
    }
    public function getWebpQuality(): int
    {
    }
    public function getGenerationMethod(): int
    {
    }
    public function getPictureMaxSize(): int
    {
    }
    public function getPictureMaxWidth(): int
    {
    }
    public function getPictureMaxHeight(): int
    {
    }
}
