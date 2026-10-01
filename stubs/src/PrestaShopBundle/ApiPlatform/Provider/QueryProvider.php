<?php

namespace PrestaShopBundle\ApiPlatform\Provider;

class QueryProvider implements \ApiPlatform\State\ProviderInterface
{
    use \PrestaShopBundle\ApiPlatform\DefaultValuesTrait;
    use \PrestaShopBundle\ApiPlatform\QueryResultSerializerTrait;
    public function __construct(protected readonly \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus, protected readonly \PrestaShopBundle\ApiPlatform\Serializer\CQRSApiSerializer $domainSerializer, protected readonly \PrestaShopBundle\ApiPlatform\ContextParametersProvider $contextParametersProvider)
    {
    }
    /**
     * @param \ApiPlatform\Metadata\Operation $operation
     * @param array $uriVariables
     * @param array $context
     *
     * @return array|object|null
     *
     * @throws \Symfony\Component\Serializer\Exception\ExceptionInterface
     * @throws \PrestaShopBundle\ApiPlatform\Exception\CQRSQueryNotFoundException
     * @throws \ReflectionException
     */
    public function provide(\ApiPlatform\Metadata\Operation $operation, array $uriVariables = [], array $context = []): array|object|null
    {
    }
}
