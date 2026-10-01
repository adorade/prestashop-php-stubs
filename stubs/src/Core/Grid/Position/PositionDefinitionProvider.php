<?php

namespace PrestaShop\PrestaShop\Core\Grid\Position;

/**
 * This is a service locator that allows fetching position definitions via their index.
 */
class PositionDefinitionProvider
{
    public function __construct(
        #[\Symfony\Component\DependencyInjection\Attribute\AutowireLocator('core.grid_position_definition')]
        protected \Symfony\Contracts\Service\ServiceProviderInterface $positionDefinitions
    )
    {
    }
    public function getPositionDefinition(string $name): \PrestaShop\PrestaShop\Core\Grid\Position\PositionDefinitionInterface
    {
    }
}
