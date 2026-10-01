<?php

namespace PrestaShopBundle\ApiPlatform\Normalizer;

/**
 * Normalizes DateImmutable properties with Y-m-d format for API Platform.
 * Ensures date-only values are serialized without time component.
 */
#[\Symfony\Component\DependencyInjection\Attribute\AutoconfigureTag('prestashop.api.normalizers')]
class DateImmutableNormalizer implements \Symfony\Component\Serializer\Normalizer\DenormalizerInterface, \Symfony\Component\Serializer\Normalizer\NormalizerInterface
{
    /**
     * @param mixed $data Date string in Y-m-d format
     */
    public function denormalize($data, string $type, ?string $format = null, array $context = [])
    {
    }
    public function supportsDenormalization($data, string $type, ?string $format = null)
    {
    }
    /**
     * @param mixed $object Must be a DateImmutable instance
     *
     * @return string Date string in Y-m-d format
     */
    public function normalize(mixed $object, ?string $format = null, array $context = [])
    {
    }
    public function supportsNormalization(mixed $data, ?string $format = null)
    {
    }
    /**
     * @return array<string, bool>
     */
    public function getSupportedTypes(?string $format): array
    {
    }
}
