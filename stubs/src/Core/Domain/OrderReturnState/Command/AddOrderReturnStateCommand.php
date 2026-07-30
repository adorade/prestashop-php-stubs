<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderReturnState\Command;

/**
 * Adds new order return state with provided data
 */
class AddOrderReturnStateCommand
{
    public function __construct(array $localizedNames, string $color)
    {
    }
    /**
     * @return string[]
     */
    public function getLocalizedNames()
    {
    }
    /**
     * @param string[] $localizedNames
     *
     * @return $this
     *
     * @throws OrderReturnStateConstraintException
     */
    public function setLocalizedNames(array $localizedNames)
    {
    }
    /**
     * @return string
     */
    public function getColor()
    {
    }
}
