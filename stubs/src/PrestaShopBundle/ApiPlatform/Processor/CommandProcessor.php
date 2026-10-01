<?php

namespace PrestaShopBundle\ApiPlatform\Processor;

class CommandProcessor implements \ApiPlatform\State\ProcessorInterface
{
    use \PrestaShopBundle\ApiPlatform\QueryResultSerializerTrait;
    public function __construct(protected readonly \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $commandBus, protected readonly \PrestaShopBundle\ApiPlatform\Serializer\CQRSApiSerializer $domainSerializer, protected readonly \PrestaShopBundle\ApiPlatform\ContextParametersProvider $contextParametersProvider)
    {
    }
    /**
     * @param $data
     * @param \ApiPlatform\Metadata\Operation $operation
     * @param array $uriVariables
     * @param array $context
     *
     * @return mixed
     *
     * @throws \PrestaShopBundle\ApiPlatform\Exception\CQRSCommandNotFoundException
     * @throws \Symfony\Component\Serializer\Exception\ExceptionInterface|\ReflectionException
     */
    public function process($data, \ApiPlatform\Metadata\Operation $operation, array $uriVariables = [], array $context = [])
    {
    }
    /**
     * Transform CQRS result into an ApiPlatform DTO object.
     *
     * @param mixed $commandResult
     * @param \ApiPlatform\Metadata\Operation $operation
     * @param array $uriVariables
     *
     * @return mixed
     */
    protected function denormalizeCommandResult(mixed $commandResult, \ApiPlatform\Metadata\Operation $operation, array $uriVariables): mixed
    {
    }
    /**
     * If no query class as specified the normalized data is simply what the command returned (an array, an object, ...) that is
     * denormalized to match the operation class
     *
     * @param array $normalizedCommandResult
     * @param \ApiPlatform\Metadata\Operation $operation
     *
     * @return mixed
     */
    protected function denormalizeApiPlatformDTO(array $normalizedCommandResult, \ApiPlatform\Metadata\Operation $operation): mixed
    {
    }
    /**
     * If a query was specified it means the expected return should use it, usually it allows returning the full object like in GET
     * operation, but it could also be a different query that returns different data from the GET to return a small piece of the object for example.
     *
     * @param string $CQRSQueryClass
     * @param array $normalizedCommandResult
     * @param \ApiPlatform\Metadata\Operation $operation
     *
     * @return mixed
     */
    protected function handleCQRSQueryAndReturnResult(string $CQRSQueryClass, array $normalizedCommandResult, \ApiPlatform\Metadata\Operation $operation): mixed
    {
    }
    /**
     * Return the mapping used for normalizing AND denormalizing the CQRS command, if specified.
     *
     * @param \ApiPlatform\Metadata\Operation $operation
     *
     * @return array|null
     */
    protected function getCQRSCommandMapping(\ApiPlatform\Metadata\Operation $operation): ?array
    {
    }
    protected function getCQRSCommandClass(\ApiPlatform\Metadata\Operation $operation): ?string
    {
    }
}
