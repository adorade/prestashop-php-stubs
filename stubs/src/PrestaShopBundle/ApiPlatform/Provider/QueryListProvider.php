<?php

namespace PrestaShopBundle\ApiPlatform\Provider;

class QueryListProvider implements \ApiPlatform\State\ProviderInterface
{
    use \PrestaShopBundle\ApiPlatform\DefaultValuesTrait;
    use \PrestaShopBundle\ApiPlatform\QueryResultSerializerTrait;
    public const DEFAULT_PAGINATED_ITEM_LIMIT = 50;
    public function __construct(protected readonly \Symfony\Component\HttpFoundation\RequestStack $requestStack, protected readonly \PrestaShopBundle\ApiPlatform\Serializer\CQRSApiSerializer $domainSerializer, protected readonly \Psr\Container\ContainerInterface $container, protected readonly \PrestaShop\PrestaShop\Core\Context\ShopContext $shopContext, protected readonly \PrestaShop\PrestaShop\Core\Search\Builder\FiltersBuilderInterface $filtersBuilder, protected readonly \PrestaShop\PrestaShop\Core\CommandBus\CommandBusInterface $queryBus, protected readonly \PrestaShopBundle\ApiPlatform\ContextParametersProvider $contextParametersProvider, protected readonly \Symfony\Component\PropertyAccess\PropertyAccessorInterface $propertyAccessor, protected readonly ?\PrestaShop\PrestaShop\Core\ExtraProperty\Api\ExtraPropertyApiListRecordCollector $extraPropertyListCollector = null)
    {
    }
    /**
     * @param \ApiPlatform\Metadata\Operation $operation
     * @param array $uriVariables
     * @param array $context
     *
     * @return object|array|null
     *
     * @throws \Symfony\Component\Serializer\Exception\ExceptionInterface
     * @throws \ReflectionException
     */
    public function provide(\ApiPlatform\Metadata\Operation $operation, array $uriVariables = [], array $context = []): object|array|null
    {
    }
    protected function paginationByGridDataFactory(string $gridDataFactoryDefinition, \ApiPlatform\Metadata\Operation $operation, array $context): \PrestaShopBundle\ApiPlatform\Pagination\PaginationElements
    {
    }
    protected function paginationByCQRSQuery(string $CQRSQueryClass, \ApiPlatform\Metadata\Operation $operation, array $uriVariables, array $context): \PrestaShopBundle\ApiPlatform\Pagination\PaginationElements
    {
    }
    protected function createPaginationElements(array $items, int $count, \PrestaShop\PrestaShop\Core\Search\Filters $filter, \ApiPlatform\Metadata\Operation $operation, array $context): \PrestaShopBundle\ApiPlatform\Pagination\PaginationElements
    {
    }
    protected function createFilters(array $context, \ApiPlatform\Metadata\Operation $operation): \PrestaShop\PrestaShop\Core\Search\Filters
    {
    }
    protected function mapOrderByFieldForGrid(?string $apiOrderBy, array $filtersMapping): ?string
    {
    }
    protected function mapOrderByFieldForAPI(?string $gridOrderBy, array $filtersMapping): ?string
    {
    }
}
