<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderReturnState\QueryResult;

/**
 * Stores editable data for order return state
 */
class EditableOrderReturnState
{
    public function __construct(\PrestaShop\PrestaShop\Core\Domain\OrderReturnState\ValueObject\OrderReturnStateId $orderStateId, array $name, string $color)
    {
    }
    /**
     * @return OrderReturnStateId
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
}
