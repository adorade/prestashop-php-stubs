<?php

namespace PrestaShopBundle\ApiPlatform\Normalizer;

/**
 * Normalize DecimalNumber values
 */
#[\Symfony\Component\DependencyInjection\Attribute\AutoconfigureTag('prestashop.api.normalizers')]
class ShopConstraintNormalizer implements \Symfony\Component\Serializer\Normalizer\DenormalizerInterface, \Symfony\Component\Serializer\Normalizer\NormalizerInterface
{
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
