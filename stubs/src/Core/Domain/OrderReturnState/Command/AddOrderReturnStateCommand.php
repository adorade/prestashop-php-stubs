<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderReturnState\Command;

/**
 * Adds new order return state with provided data
 */
class AddOrderReturnStateCommand
{
    public function __construct(array $localizedNames, private string $color, private bool $isCancellingReturn = false)
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
     * @throws \PrestaShop\PrestaShop\Core\Domain\OrderReturnState\Exception\OrderReturnStateConstraintException
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
    public function setCancellingReturn(bool $isCancellingReturn): self
    {
    }
    public function isCancellingReturn(): bool
    {
    }
}
