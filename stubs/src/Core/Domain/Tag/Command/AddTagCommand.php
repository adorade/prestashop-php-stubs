<?php

namespace PrestaShop\PrestaShop\Core\Domain\Tag\Command;

class AddTagCommand
{
    public function __construct(private readonly string $name, private readonly int $languageId, private readonly array $productIds = [])
    {
    }
    public function getName(): ?string
    {
    }
    public function getLanguageId(): ?int
    {
    }
    /**
     * @return int[]
     */
    public function getProductIds(): array
    {
    }
}
