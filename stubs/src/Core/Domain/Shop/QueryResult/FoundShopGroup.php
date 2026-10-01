<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shop\QueryResult;

/**
 * Holds data of a shop group found via a SearchShop query
 */
class FoundShopGroup
{
    /**
     * FoundShopGroup constructor.
     *
     * @param int $id
     * @param string $color
     * @param string $name
     */
    public function __construct(int $id, string $color, string $name)
    {
    }
    public function getId(): int
    {
    }
    public function getColor(): string
    {
    }
    public function getName(): string
    {
    }
}
