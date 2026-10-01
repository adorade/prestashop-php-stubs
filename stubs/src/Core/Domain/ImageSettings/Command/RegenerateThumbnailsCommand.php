<?php

namespace PrestaShop\PrestaShop\Core\Domain\ImageSettings\Command;

/**
 * Regenerate thumbnails command
 */
class RegenerateThumbnailsCommand
{
    public function __construct(private readonly string $image, private readonly int $imageTypeId, private readonly bool $erasePreviousImages)
    {
    }
    public function getImage(): string
    {
    }
    public function getImageTypeId(): int
    {
    }
    public function erasePreviousImages(): bool
    {
    }
}
