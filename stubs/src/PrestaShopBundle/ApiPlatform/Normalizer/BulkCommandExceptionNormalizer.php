<?php

namespace PrestaShopBundle\ApiPlatform\Normalizer;

/**
 * Normalizes BulkCommandExceptionInterface errors into a multi-status response
 * containing the list of individual errors that occurred during the bulk operation.
 *
 * In the API Platform error flow, the serializer receives a FlattenException which loses
 * the original exception's getExceptions() data. The original BulkCommandExceptionInterface
 * is retrieved from the request attributes where Symfony's ErrorListener stores it.
 * It may be stored directly or as the previous exception of an HttpException wrapper
 * (set by BulkCommandExceptionListener).
 */
class BulkCommandExceptionNormalizer implements \Symfony\Component\Serializer\Normalizer\NormalizerInterface
{
    public function __construct(private readonly \Symfony\Component\HttpFoundation\RequestStack $requestStack)
    {
    }
    public function normalize(mixed $object, ?string $format = null, array $context = []): array
    {
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
    }
    public function getSupportedTypes(?string $format): array
    {
    }
}
