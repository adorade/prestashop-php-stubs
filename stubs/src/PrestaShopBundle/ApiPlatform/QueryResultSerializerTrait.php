<?php

namespace PrestaShopBundle\ApiPlatform;

trait QueryResultSerializerTrait
{
    protected readonly \PrestaShopBundle\ApiPlatform\Serializer\CQRSApiSerializer $domainSerializer;
    /**
     * @param mixed $CQRSQueryResult this is the QueryResult DTO returned by a CQRS query
     * @param \ApiPlatform\Metadata\Operation $operation
     * @param array $extraParameters
     *
     * @return mixed It returns the ApiResource DTO object
     */
    protected function denormalizeQueryResult($CQRSQueryResult, \ApiPlatform\Metadata\Operation $operation, array $extraParameters = [])
    {
    }
    /**
     * Return the mapping used for normalizing AND denormalizing the ApiResource DTO, if specified.
     *
     * @param \ApiPlatform\Metadata\Operation $operation
     *
     * @return array|null
     */
    protected function getApiResourceMapping(\ApiPlatform\Metadata\Operation $operation): ?array
    {
    }
    /**
     * Return the mapping used for normalizing AND denormalizing the CQRS query, if specified.
     *
     * @param \ApiPlatform\Metadata\Operation $operation
     *
     * @return array|null
     */
    protected function getCQRSQueryMapping(\ApiPlatform\Metadata\Operation $operation): ?array
    {
    }
    protected function getCQRSQueryClass(\ApiPlatform\Metadata\Operation $operation): ?string
    {
    }
}
