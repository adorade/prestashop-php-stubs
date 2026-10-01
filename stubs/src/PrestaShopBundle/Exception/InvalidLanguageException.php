<?php

namespace PrestaShopBundle\Exception;

class InvalidLanguageException extends \RuntimeException
{
    public const LOCALE_NOT_FOUND = 1;
    public static function localeNotFound($locale)
    {
    }
}
