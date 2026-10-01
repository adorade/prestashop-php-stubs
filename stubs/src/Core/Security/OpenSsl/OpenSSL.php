<?php

namespace PrestaShop\PrestaShop\Core\Security\OpenSsl;

/**
 * Wrapper around the openssl_random_pseudo_bytes function so it can be tested.
 */
class OpenSSL implements \PrestaShop\PrestaShop\Core\Security\OpenSsl\OpenSSLInterface
{
    public function getBytes(int $length): string
    {
    }
}
