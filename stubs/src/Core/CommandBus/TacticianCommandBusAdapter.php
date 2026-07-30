<?php

namespace PrestaShop\PrestaShop\Core\CommandBus;

/**
 * Class TacticianCommandBusAdapter is Tactician's CommandsBus implementation for PrestaShop's contract.
 */
final class TacticianCommandBusAdapter implements \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface
{
    /**
     * @param CommandBus $bus
     */
    public function __construct(\League\Tactician\CommandBus $bus)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function handle($command)
    {
    }
}
