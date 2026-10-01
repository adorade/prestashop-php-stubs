<?php

namespace PrestaShop\PrestaShop\Core\Domain\Category\ValueObject;

/**
 * Represent category id to which customer should be redirected in case category is disabled
 */
class RedirectTarget
{
    public const NO_TARGET = 0;
    /**
     * @param int $value
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Category\Exception\CategoryConstraintException
     */
    public function __construct(int $value)
    {
    }
    public function isNoTarget(): bool
    {
    }
    public function getValue(): int
    {
    }
}
