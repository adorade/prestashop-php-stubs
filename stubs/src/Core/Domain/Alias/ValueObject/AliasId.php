<?php

namespace PrestaShop\PrestaShop\Core\Domain\Alias\ValueObject;

/**
 * Defines Alias ID with it's constraints.
 */
class AliasId
{
    /**
     * @param int $aliasId
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Alias\Exception\AliasConstraintException
     */
    public function __construct(int $aliasId)
    {
    }
    /**
     * @return int
     */
    public function getValue(): int
    {
    }
}
