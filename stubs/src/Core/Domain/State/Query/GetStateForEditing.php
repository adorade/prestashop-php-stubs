<?php

namespace PrestaShop\PrestaShop\Core\Domain\State\Query;

/**
 * Gets state for editing in back office
 */
class GetStateForEditing
{
    /**
     * @param int $stateId
     */
    public function __construct(int $stateId)
    {
    }
    /**
     * @return StateId
     */
    public function getStateId(): \PrestaShop\PrestaShop\Core\Domain\State\ValueObject\StateId
    {
    }
}
