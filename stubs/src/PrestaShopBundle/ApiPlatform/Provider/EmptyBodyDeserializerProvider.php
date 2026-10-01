<?php

namespace PrestaShopBundle\ApiPlatform\Provider;

/**
 * This decorator is used when we enabled our custom property allowEmptyBody We don't need to specify
 * a content-type in this case but the DeserializerProvider forces it, so we decorate it and mimic the
 * expected behaviour.
 */
#[\Symfony\Component\DependencyInjection\Attribute\AsDecorator(decorates: 'api_platform.state_provider.deserialize')]
class EmptyBodyDeserializerProvider implements \ApiPlatform\State\ProviderInterface
{
    public function __construct(
        #[\Symfony\Component\DependencyInjection\Attribute\AutowireDecorated]
        private readonly \ApiPlatform\State\ProviderInterface $decorated
    )
    {
    }
    public function provide(\ApiPlatform\Metadata\Operation $operation, array $uriVariables = [], array $context = []): object|array|null
    {
    }
}
