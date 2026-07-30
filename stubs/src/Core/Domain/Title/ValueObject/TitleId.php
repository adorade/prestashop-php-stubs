<?php

namespace PrestaShop\PrestaShop\Core\Domain\Title\ValueObject;

/**
 * Provides Title id
 */
class TitleId
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @param int $id
     *
     * @throws TitleConstraintException
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
