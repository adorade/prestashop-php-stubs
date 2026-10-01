<?php

namespace PrestaShopBundle\ApiPlatform\Processor;

class UpdatePositionProcessor implements \ApiPlatform\State\ProcessorInterface
{
    public function __construct(protected readonly \Psr\Container\ContainerInterface $container, protected readonly \PrestaShop\PrestaShop\Core\Grid\Position\PositionUpdateFactoryInterface $positionUpdateFactory, protected readonly \PrestaShop\PrestaShop\Core\Grid\Position\GridPositionUpdaterInterface $gridPositionUpdater, protected readonly \PrestaShopBundle\ApiPlatform\Serializer\CQRSApiSerializer $domainSerializer)
    {
    }
    public function process(mixed $data, \ApiPlatform\Metadata\Operation $operation, array $uriVariables = [], array $context = [])
    {
    }
    protected function getPositionsData(array $data, \PrestaShop\PrestaShop\Core\Grid\Position\PositionDefinition $positionDefinition, string $parentIdField): ?array
    {
    }
    protected function getApiResourceMapping(\ApiPlatform\Metadata\Operation $operation): ?array
    {
    }
}
