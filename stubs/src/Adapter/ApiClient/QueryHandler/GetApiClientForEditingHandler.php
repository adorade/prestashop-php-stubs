<?php

namespace PrestaShop\PrestaShop\Adapter\ApiClient\QueryHandler;

#[\PrestaShop\PrestaShop\Core\CommandBus\Attributes\AsQueryHandler]
class GetApiClientForEditingHandler implements \PrestaShop\PrestaShop\Core\Domain\ApiClient\QueryHandler\GetApiClientForEditingHandlerInterface
{
    public function __construct(private readonly \PrestaShopBundle\Entity\Repository\ApiClientRepository $repository)
    {
    }
    public function handle(\PrestaShop\PrestaShop\Core\Domain\ApiClient\Query\GetApiClientForEditing $query): \PrestaShop\PrestaShop\Core\Domain\ApiClient\QueryResult\EditableApiClient
    {
    }
}
