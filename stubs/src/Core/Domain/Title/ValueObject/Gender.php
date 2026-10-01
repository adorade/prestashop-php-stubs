<?php

namespace PrestaShop\PrestaShop\Core\Domain\Title\ValueObject;

class Gender
{
    public const TYPE_MALE = 0;
    public const TYPE_FEMALE = 1;
    public const TYPE_OTHER = 2;
    /**
     * @var int
     */
    protected $type;
    /**
     * @param int $gender
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Title\Exception\TitleConstraintException
     */
    public function __construct(int $gender)
    {
    }
    /**
     * @param int $gender
     *
     * @return void
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Title\Exception\TitleConstraintException
     */
    protected function assertIsAuthValues(int $gender): void
    {
    }
    /**
     * @return int
     */
    public function getValue(): int
    {
    }
}
