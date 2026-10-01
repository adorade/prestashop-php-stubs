<?php

namespace PrestaShopBundle\ApiPlatform\Metadata;

/**
 * Class PaginatedList is a custom operation that provides extra parameters
 * to help configure an operation based on a GetCollection,
 * it is custom tailed for read operations and forces using the GET method.
 * It gathers its data from the associated GridData using the GridDataFactoryInterface.
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::IS_REPEATABLE)]
class PaginatedList extends \PrestaShopBundle\ApiPlatform\Metadata\AbstractCQRSOperation implements \ApiPlatform\Metadata\CollectionOperationInterface
{
    public function __construct(?string $uriTemplate = null, ?array $types = null, $formats = null, $inputFormats = null, $outputFormats = null, $uriVariables = null, ?string $routePrefix = null, ?string $routeName = null, ?array $defaults = null, ?array $requirements = null, ?array $options = null, ?bool $stateless = null, ?string $sunset = null, ?string $acceptPatch = null, $status = null, ?string $host = null, ?array $schemes = null, ?string $condition = null, ?string $controller = null, ?array $headers = null, ?array $cacheHeaders = null, ?array $paginationViaCursor = null, ?array $hydraContext = null, ?array $openapiContext = null, bool|\ApiPlatform\OpenApi\Model\Operation|\ApiPlatform\OpenApi\Attributes\Webhook|null $openapi = null, ?array $exceptionToStatus = null, ?array $links = null, ?array $errors = null, ?string $shortName = null, ?string $class = null, ?bool $paginationEnabled = null, ?string $paginationType = null, ?int $paginationItemsPerPage = null, ?int $paginationMaximumItemsPerPage = null, ?bool $paginationPartial = null, ?bool $paginationClientEnabled = null, ?bool $paginationClientItemsPerPage = null, ?bool $paginationClientPartial = null, ?bool $paginationFetchJoinCollection = null, ?bool $paginationUseOutputWalkers = null, ?array $order = null, ?string $description = null, ?array $normalizationContext = null, ?array $denormalizationContext = null, ?bool $collectDenormalizationErrors = null, string|\Stringable|null $security = null, ?string $securityMessage = null, string|\Stringable|null $securityPostDenormalize = null, ?string $securityPostDenormalizeMessage = null, string|\Stringable|null $securityPostValidation = null, ?string $securityPostValidationMessage = null, ?string $deprecationReason = null, ?array $filters = null, ?array $validationContext = null, $input = null, $output = null, $mercure = null, $messenger = null, ?bool $elasticsearch = null, ?int $urlGenerationStrategy = null, ?bool $read = null, ?bool $deserialize = null, ?bool $validate = null, ?bool $write = null, ?bool $serialize = null, ?bool $fetchPartial = null, ?bool $forceEager = null, ?int $priority = null, ?string $name = null, $provider = null, $processor = null, ?\ApiPlatform\State\OptionsInterface $stateOptions = null, array|\ApiPlatform\Metadata\Parameters|null $parameters = null, ?bool $queryParameterValidationEnabled = null, array $extraProperties = [], array $scopes = [], ?array $ApiResourceMapping = null, ?string $gridDataFactory = null, ?string $filtersClass = null, ?array $filtersMapping = null, ?bool $experimentalOperation = null)
    {
    }
    public function getGridDataFactory(): ?string
    {
    }
    public function withGridDataFactory(string $gridDataFactory): static
    {
    }
    public function getFiltersClass(): ?string
    {
    }
    public function withFiltersClass(string $filtersClass): static
    {
    }
    public function getFiltersMapping(): ?array
    {
    }
    public function withFiltersMapping(array $filtersMapping): static
    {
    }
}
