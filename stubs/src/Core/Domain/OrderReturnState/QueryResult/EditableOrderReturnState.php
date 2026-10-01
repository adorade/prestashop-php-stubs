<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderReturnState\QueryResult;

/**
 * Stores editable data for order return state
 */
class EditableOrderReturnState
{
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\OrderReturnState\ValueObject\OrderReturnStateId $orderStateId, array $name, private string $color, private bool $isCancellingReturn)
    {
    }
    /**
     * @return \PrestaShop\PrestaShop\Core\Domain\OrderReturnState\ValueObject\OrderReturnStateId
     */
    public function getOrderReturnStateId()
    {
    }
    /**
     * @return array
     */
    public function getLocalizedNames()
    {
    }
    /**
     * @return string
     */
    public function getColor()
    {
    }
    public function isCancellingReturn(): bool
    {
    }
}
