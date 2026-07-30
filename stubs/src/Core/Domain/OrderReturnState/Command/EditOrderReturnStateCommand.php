<?php

namespace PrestaShop\PrestaShop\Core\Domain\OrderReturnState\Command;

/**
 * Edits provided order return state.
 * It can edit either all or partial data.
 *
 * Only not-null values are considered when editing order return state.
 * For example, if the name is null, then the original value is not modified,
 * however, if name is set, then the original value will be overwritten.
 */
class EditOrderReturnStateCommand
{
    /**
     * @param int $orderReturnStateId
     */
    public function __construct($orderReturnStateId)
    {
    }
    /**
     * @return OrderReturnStateId
     */
    public function getOrderReturnStateId()
    {
    }
    /**
     * @return array<string>|null
     */
    public function getName()
    {
    }
    /**
     * @param array<string> $name
     *
     * @return self
     */
    public function setName($name)
    {
    }
    /**
     * @return string|null
     */
    public function getColor()
    {
    }
    /**
     * @return self
     */
    public function setColor(?string $color)
    {
    }
}
