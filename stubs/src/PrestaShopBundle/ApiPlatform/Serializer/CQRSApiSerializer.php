<?php

namespace PrestaShopBundle\ApiPlatform\Serializer;

/**
 * This serializer decorates the API Platform one, it handles PrestaShop custom modifications like updating the localized values indexes,
 * or apply the mapping between CQRS object and API resources.
 */
class CQRSApiSerializer implements \Symfony\Component\Serializer\SerializerInterface, \Symfony\Component\Serializer\Normalizer\ContextAwareNormalizerInterface, \Symfony\Component\Serializer\Normalizer\ContextAwareDenormalizerInterface, \Symfony\Component\Serializer\Encoder\ContextAwareEncoderInterface, \Symfony\Component\Serializer\Encoder\ContextAwareDecoderInterface
{
    public const CAST_BOOL = 'cast_bool';
    public function __construct(protected readonly \Symfony\Component\Serializer\Serializer $decorated, protected readonly \PrestaShopBundle\ApiPlatform\ContextParametersProvider $contextParametersProvider, protected readonly \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactoryInterface $classMetadataFactory, protected readonly \PrestaShopBundle\ApiPlatform\LocalizedValueUpdater $localizedValueUpdater, protected readonly \PrestaShopBundle\ApiPlatform\NormalizationMapper $normalizationMapper, protected readonly \PrestaShopBundle\ApiPlatform\PositionCollectionUpdater $positionCollectionUpdater)
    {
    }
    public function supportsDecoding(string $format, array $context = []): bool
    {
    }
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
    }
    public function supportsEncoding(string $format, array $context = []): bool
    {
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
    }
    public function decode(string $data, string $format, array $context = [])
    {
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = [])
    {
    }
    public function encode(mixed $data, string $format, array $context = []): string
    {
    }
    public function normalize(mixed $object, ?string $format = null, array $context = [])
    {
    }
    public function serialize(mixed $data, string $format, array $context = []): string
    {
    }
    public function deserialize(mixed $data, string $type, string $format, array $context = []): mixed
    {
    }
    /**
     * Denormalize data for localized values so that the indexes match the expected value (ID or locale)
     */
    protected function denormalizeLocalizedValues(array $data, string $type, array $context = []): array
    {
    }
    /**
     * Normalize data for localized values so that the indexes match the expected value (ID or locale)
     */
    protected function normalizeLocalizedValues(array $data, string $type, array $context = []): array
    {
    }
    /**
     * Force casting boolean properties so that values like (1, 0, true, on, false, ...) are valid, this is useful for
     * data coming from DB where boolean are returned as tiny integers. To enable this casting the CQRSApiSerializer::CAST_BOOL
     * context option must be true.
     *
     * Note: in Symfony 7.1 a new option AbstractNormalizer::FILTER_BOOL has been introduced, when we upgrade our
     * Symfony dependencies our custom casting (inspired by the Symfony one) can be removed.
     *
     * https://symfony.com/doc/7.1/serializer.html#handling-boolean-values
     */
    protected function addBooleanCastCallbacks(string $type, array &$context): void
    {
    }
    /**
     * Empty body is not allowed with JSON format as empty string is considered invalid JSON, but in some cases we
     * want to send an empty body (delete an operation, enable an entity via dedicated endpoint, ...) if the ID is
     * already in the URI, and we don't need any other data.
     */
    protected function isEmptyBodyAllowed(string $data, array $context): bool
    {
    }
}
