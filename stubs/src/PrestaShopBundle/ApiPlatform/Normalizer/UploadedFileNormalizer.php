<?php

namespace PrestaShopBundle\ApiPlatform\Normalizer;

/**
 * This normalizer disables the normalization process of File fields in the ApiPlatform resources
 * as recommended by ApiPlatform https://api-platform.com/docs/core/file-upload/.
 *
 * However, it does normalize and returns the content as an array so that we can use the miscellaneous
 * fields in our command mapping.
 */
class UploadedFileNormalizer implements \Symfony\Component\Serializer\Normalizer\DenormalizerInterface, \Symfony\Component\Serializer\Normalizer\NormalizerInterface
{
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = [])
    {
    }
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null)
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
