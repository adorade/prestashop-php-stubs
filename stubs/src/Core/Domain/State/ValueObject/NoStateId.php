<?php

namespace PrestaShop\PrestaShop\Core\Domain\State\ValueObject;

/**
 * Provides state id
 */
class NoStateId implements \PrestaShop\PrestaShop\Core\Domain\State\ValueObject\StateIdInterface
{
    /**
     * @var int
     */
    public const NO_STATE_ID_VALUE = 0;
    /**
     * @return int
     */
    public function getValue(): int
    {
    }
}
