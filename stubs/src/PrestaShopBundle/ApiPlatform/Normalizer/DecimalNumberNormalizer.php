<?php

namespace PrestaShopBundle\ApiPlatform\Normalizer;

/**
 * Normalize DecimalNumber values
 */
#[\Symfony\Component\DependencyInjection\Attribute\AutoconfigureTag('prestashop.api.normalizers')]
class DecimalNumberNormalizer implements \Symfony\Component\Serializer\Normalizer\DenormalizerInterface, \Symfony\Component\Serializer\Normalizer\NormalizerInterface
{
    /**
     * A value that is not a number raises the serializer's own exception (a 400 with a message
     * on the API, and the next member of a union type gets its chance) instead of the decimal
     * library's InvalidArgumentException, which the serializer would not recognize (500).
     */
    public function denormalize($data, string $type, ?string $format = null, array $context = [])
    {
    }
    public function supportsDenormalization($data, string $type, ?string $format = null)
    {
    }
    public function normalize($object, ?string $format = null, array $context = [])
    {
    }
    public function supportsNormalization($data, ?string $format = null)
    {
    }
    public function getSupportedTypes(?string $format): array
    {
    }
}
