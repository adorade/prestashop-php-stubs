<?php

namespace PrestaShopBundle\ApiPlatform\Encoder;

/**
 * Additional decoder to handle multipart form data requests.
 */
class MultipartDecoder implements \Symfony\Component\Serializer\Encoder\DecoderInterface
{
    public const FORMAT = 'multipart';
    public function __construct(private \Symfony\Component\HttpFoundation\RequestStack $requestStack)
    {
    }
    public function decode(string $data, string $format, array $context = [])
    {
    }
    public function supportsDecoding(string $format)
    {
    }
}
