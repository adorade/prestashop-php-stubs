<?php

namespace PrestaShop\PrestaShop\Core\Domain\State\Command;

/**
 * Class ToggleStateStatusCommand is responsible for toggling state status
 */
class ToggleStateStatusCommand
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
