<?php

namespace PrestaShopBundle\ApiPlatform\Metadata;

/**
 * Class UpdatePosition is a custom operation to update the entities positions.
 * The API Resource itself represent a position modification:
 *  - rowId: int (can be customized via the PositionCollection attribute)
 *  - newPosition: int
 *  - parentId: int (optional, customizable vie $parentIdField)
 *
 * This operation should be used on a dedicated ApiResource class (one operation only)
 * containing a field
 *
 * #[PositionCollection]
 * public array $positions;
 *
 * The attribute allows automatizing the normalization and documentation process.
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::IS_REPEATABLE)]
class UpdatePosition extends \PrestaShopBundle\ApiPlatform\Metadata\AbstractScopedOperation
{
    public function __construct(?string $uriTemplate = null, ?array $types = null, $formats = null, $inputFormats = null, $outputFormats = null, $uriVariables = null, ?string $routePrefix = null, ?string $routeName = null, ?array $defaults = null, ?array $requirements = null, ?array $options = null, ?bool $stateless = null, ?string $sunset = null, ?string $acceptPatch = null, $status = null, ?string $host = null, ?array $schemes = null, ?string $condition = null, ?string $controller = null, ?array $headers = null, ?array $cacheHeaders = null, ?array $paginationViaCursor = null, ?array $hydraContext = null, ?array $openapiContext = null, bool|\ApiPlatform\OpenApi\Model\Operation|\ApiPlatform\OpenApi\Attributes\Webhook|null $openapi = null, ?array $exceptionToStatus = null, ?array $links = null, ?array $errors = null, ?string $shortName = null, ?string $class = null, ?bool $paginationEnabled = null, ?string $paginationType = null, ?int $paginationItemsPerPage = null, ?int $paginationMaximumItemsPerPage = null, ?bool $paginationPartial = null, ?bool $paginationClientEnabled = null, ?bool $paginationClientItemsPerPage = null, ?bool $paginationClientPartial = null, ?bool $paginationFetchJoinCollection = null, ?bool $paginationUseOutputWalkers = null, ?array $order = null, ?string $description = null, ?array $normalizationContext = null, ?array $denormalizationContext = null, ?bool $collectDenormalizationErrors = null, string|\Stringable|null $security = null, ?string $securityMessage = null, string|\Stringable|null $securityPostDenormalize = null, ?string $securityPostDenormalizeMessage = null, string|\Stringable|null $securityPostValidation = null, ?string $securityPostValidationMessage = null, ?string $deprecationReason = null, ?array $filters = null, ?array $validationContext = null, $input = null, $output = null, $mercure = null, $messenger = null, ?bool $elasticsearch = null, ?int $urlGenerationStrategy = null, ?bool $read = null, ?bool $deserialize = null, ?bool $validate = null, ?bool $write = null, ?bool $serialize = null, ?bool $fetchPartial = null, ?bool $forceEager = null, ?int $priority = null, ?string $name = null, $provider = null, $processor = null, ?\ApiPlatform\State\OptionsInterface $stateOptions = null, array|\ApiPlatform\Metadata\Parameters|null $parameters = null, ?bool $queryParameterValidationEnabled = null, array $extraProperties = [], array $scopes = [], ?array $ApiResourceMapping = null, ?bool $experimentalOperation = null, ?string $positionDefinition = null, ?string $parentIdField = null, ?string $minVersion = null, ?string $maxVersion = null)
    {
    }
    public function getPositionDefinition(): ?string
    {
    }
    public function withPositionDefinition(string $positionDefinition): static
    {
    }
    public function getParentIdField(): ?string
    {
    }
    public function withParentIdField(string $parentIdField): static
    {
    }
}
