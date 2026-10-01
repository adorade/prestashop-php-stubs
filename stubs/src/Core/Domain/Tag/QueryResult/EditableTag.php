<?php

namespace PrestaShop\PrestaShop\Core\Domain\Tag\QueryResult;

class EditableTag
{
    public function __construct(private readonly string $name, private readonly int $languageId, private readonly array $products)
    {
    }
    public function getName(): string
    {
    }
    public function getLanguageId(): int
    {
    }
    /**
     * @return array{id: int, name: string, image: string}[]
     */
    public function getProducts(): array
    {
    }
}
