<?php

namespace PrestaShop\PrestaShop\Core\Domain\Alias\ValueObject;

/**
 * Defines alias search term with it's constraints.
 */
class SearchTerm
{
    public function __construct(private string $searchTerm)
    {
    }
    /**
     * @return string
     */
    public function getValue(): string
    {
    }
}
