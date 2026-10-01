<?php

namespace PrestaShopBundle\ApiPlatform\Normalizer;

/**
 * Normalize DateTimeImmutable properties.
 */
#[\Symfony\Component\DependencyInjection\Attribute\AutoconfigureTag('prestashop.api.normalizers')]
class DateTimeImmutableNormalizer implements \Symfony\Component\Serializer\Normalizer\DenormalizerInterface, \Symfony\Component\Serializer\Normalizer\NormalizerInterface
{
    public function denormalize($data, string $type, ?string $format = null, array $context = [])
    {
    }
    public function supportsDenormalization($data, string $type, ?string $format = null)
    {
    }
    public function normalize(mixed $object, ?string $format = null, array $context = [])
    {
    }
    public function supportsNormalization(mixed $data, ?string $format = null)
    {
    }
    public function getSupportedTypes(?string $format): array
    {
    }
}
