<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\ValueObject;

/**
 * Represents product or category id to which customer should be redirected in case product is disabled
 */
class RedirectTarget
{
    public const NO_TARGET = 0;
    /**
     * @param int $value
     *
     * @throws ProductConstraintException
     */
    public function __construct(int $value)
    {
    }
    public function isNoTarget(): bool
    {
    }
    /**
     * @return int
     */
    public function getValue(): int
    {
    }
}
