<?php

namespace PrestaShop\PrestaShop\Core\Domain\ExtraProperty\ValueObject;

/**
 * Encapsulates and validates an extra property definition primary key.
 */
class ExtraPropertyDefinitionId
{
    /**
     * @var int
     */
    protected int $id;
    /**
     * @param int $id
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\ExtraProperty\Exception\ExtraPropertyConstraintException
     */
    public function __construct(int $id)
    {
    }
    /**
     * @return int
     */
    public function getValue(): int
    {
    }
    /**
     * @param int $id
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\ExtraProperty\Exception\ExtraPropertyConstraintException
     */
    protected function assertIsGreaterThanZero(int $id): void
    {
    }
}
