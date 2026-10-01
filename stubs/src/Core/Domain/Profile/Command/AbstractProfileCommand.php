<?php

namespace PrestaShop\PrestaShop\Core\Domain\Profile\Command;

abstract class AbstractProfileCommand
{
    /**
     * @var string[]
     */
    protected $localizedNames;
    /**
     * @param string[] $localizedNames
     *
     * @throws \PrestaShop\PrestaShop\Core\Domain\Profile\Exception\ProfileConstraintException
     */
    public function __construct(array $localizedNames)
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedNames()
    {
    }
    /**
     * @param mixed $name
     */
    protected function assertNameIsStringAndRequiredLength($name)
    {
    }
}
