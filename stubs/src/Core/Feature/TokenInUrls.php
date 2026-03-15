<?php

namespace PrestaShop\PrestaShop\Core\Feature;

/**
 * Defines if token in urls are disabled.
 */
final class TokenInUrls
{
    public const DISABLED = 'disabled';
    public const ENV_VAR = '_TOKEN_';
    /**
     * @return bool
     */
    public static function isDisabled()
    {
    }
}
