<?php

namespace PrestaShopBundle\Api\StateProvider;

/**
 * Provide a HookStatus DTO when request the api about hook status
 *
 * @experimental
 */
final class HookStatusProvider implements \ApiPlatform\State\ProviderInterface
{
    public function __construct(\PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus)
    {
    }
    /**
     * {@inheritDoc}
     */
    public function provide(\ApiPlatform\Metadata\Operation $operation, array $uriVariables = [], array $context = []): \PrestaShopBundle\Api\Resource\HookStatus
    {
    }
}
