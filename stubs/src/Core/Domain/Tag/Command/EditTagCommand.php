<?php

namespace PrestaShop\PrestaShop\Core\Domain\Tag\Command;

class EditTagCommand
{
    public function __construct(int $tagId)
    {
    }
    public function getTagId(): \PrestaShop\PrestaShop\Core\Domain\Tag\ValueObject\TagId
    {
    }
    public function getName(): ?string
    {
    }
    public function setName(string $name): self
    {
    }
    public function getLanguageId(): ?int
    {
    }
    public function setLanguageId(int $languageId): self
    {
    }
    public function getProductIds(): ?array
    {
    }
    public function setProductIds(?array $productIds): self
    {
    }
}
