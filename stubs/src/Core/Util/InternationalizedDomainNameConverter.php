<?php

namespace PrestaShop\PrestaShop\Core\Util;

class InternationalizedDomainNameConverter
{
    /**
     * Convert the host part of the email from punycode to utf8 (e.g,. email@xn--e1aybc.xn--p1ai -> email@тест.рф)
     *
     * @param string $email
     *
     * @return string
     */
    public function emailToUtf8(string $email): string
    {
    }
}
