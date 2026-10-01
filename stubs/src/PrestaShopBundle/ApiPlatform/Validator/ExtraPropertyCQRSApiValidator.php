<?php

namespace PrestaShopBundle\ApiPlatform\Validator;

/**
 * Admin-API-only decorator of CQRSApiValidator that also validates the incoming `extraProperties` payload and
 * MERGES its violations with the resource constraint violations into a single 422 — instead of one preempting the
 * other.
 *
 * Registered with `decorates: CQRSApiValidator` in the Admin API kernel, so CQRSApiNormalizer (which depends on
 * CQRSApiValidatorInterface) transparently uses it there. Core resource validation in PrestaShop runs during
 * denormalization, so this is the only seam where the two violation lists can be combined.
 */
class ExtraPropertyCQRSApiValidator implements \PrestaShopBundle\ApiPlatform\Validator\CQRSApiValidatorInterface
{
    public function __construct(protected readonly \PrestaShopBundle\ApiPlatform\Validator\CQRSApiValidatorInterface $inner, protected readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionRepositoryInterface $repository, protected readonly \ApiPlatform\Metadata\Resource\Factory\ResourceMetadataCollectionFactoryInterface $resourceMetadataFactory, protected readonly \Symfony\Component\HttpFoundation\RequestStack $requestStack, protected readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Validation\ExtraPropertyValidatorInterface $validatorAdapter, protected readonly \PrestaShopBundle\ApiPlatform\LocalizedValueUpdater $localizedValueUpdater, protected readonly \PrestaShop\PrestaShop\Core\Context\ShopContext $shopContext, protected readonly \PrestaShop\PrestaShop\Core\ExtraProperty\Definition\ExtraPropertyDefinitionShopFilterInterface $definitionShopFilter)
    {
    }
    /**
     * Returns true when the decorated validator reports constraints OR when an extra property definition that
     * declares constraints targets one of the resource's operations — so extra-property validation runs even for
     * resources with no core constraints, and is skipped entirely when no targeted definition has anything to enforce.
     */
    public function hasConstraints(string $resourceClass): bool
    {
    }
    public function validate(mixed $apiResource, \ApiPlatform\Metadata\Operation $operation): void
    {
    }
    protected function resourceHasExtraProperties(string $resourceClass): bool
    {
    }
    /**
     * Validates an extraProperties payload against the definitions targeting the given operation (URI template +
     * HTTP method). Returns an empty list when nothing matches or the payload is empty. Violations use the path
     * "extraProperties.<module>.<field>[.<locale|shopId>]" so they merge with the resource constraint violations.
     *
     * @param array<string, array<string, mixed>> $extraPropertiesByModule
     */
    protected function validateExtraProperties(array $extraPropertiesByModule, string $uriTemplate, string $method): \Symfony\Component\Validator\ConstraintViolationListInterface
    {
    }
    /**
     * Adds a violation when a LANG-scope payload uses a locale that does not exist in the shop.
     *
     * @param array<int|string, mixed> $localizedValue
     */
    protected function assertKnownLocales(\Symfony\Component\Validator\ConstraintViolationListInterface $violations, array $localizedValue, string $fieldName, string $basePath): void
    {
    }
    /**
     * @return array<string, array<string, mixed>>|null
     */
    protected function extractExtraPropertiesPayload(): ?array
    {
    }
}
