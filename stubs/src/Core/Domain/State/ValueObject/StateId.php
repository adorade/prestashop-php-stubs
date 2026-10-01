<?php

namespace PrestaShop\PrestaShop\Core\Domain\State\ValueObject;

/**
 * Provides state id
 */
class StateId implements \PrestaShop\PrestaShop\Core\Domain\State\ValueObject\StateIdInterface
{
    /**
     * @param int $id
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\State\Exception\StateConstraintException
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
}
