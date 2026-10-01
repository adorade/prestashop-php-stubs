<?php

namespace PrestaShopBundle\Utils;

class HTMLPurifier
{
    public function __construct()
    {
    }
    /**
     * Filters an HTML snippet/document to be XSS-free and standards-compliant.
     *
     * @param string $html String of HTML to purify
     *
     * @return string Purified HTML
     */
    public function purify($html)
    {
    }
}
