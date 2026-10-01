<?php

namespace PrestaShop\PrestaShop\Core\Grid\Definition\Factory;

/**
 * This is a service locator that allows fetching grid definition factories via their index.
 */
class GridDefinitionFactoryProvider
{
    public function __construct(
        #[\Symfony\Component\DependencyInjection\Attribute\AutowireLocator('core.grid_definition_factory')]
        protected \Symfony\Contracts\Service\ServiceProviderInterface $factories
    )
    {
    }
    public function getFactory(string $name): \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\GridDefinitionFactoryInterface
    {
    }
}
