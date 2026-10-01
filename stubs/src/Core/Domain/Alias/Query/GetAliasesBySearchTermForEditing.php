<?php

namespace PrestaShop\PrestaShop\Core\Domain\Alias\Query;

class GetAliasesBySearchTermForEditing
{
    public function __construct(private readonly string $searchTerm)
    {
    }
    public function getSearchTerm(): string
    {
    }
}
