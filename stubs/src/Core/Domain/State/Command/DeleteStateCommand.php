<?php

namespace PrestaShop\PrestaShop\Core\Domain\State\Command;

/**
 * Deletes state
 */
class DeleteStateCommand
{
    /**
     * @param int $stateId
     */
    public function __construct(int $stateId)
    {
    }
    /**
     * @return StateIdInterface
     */
    public function getStateId(): \PrestaShop\PrestaShop\Core\Domain\State\ValueObject\StateIdInterface
    {
    }
}
