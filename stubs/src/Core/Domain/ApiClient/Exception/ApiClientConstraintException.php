<?php

namespace PrestaShop\PrestaShop\Core\Domain\ApiClient\Exception;

class ApiClientConstraintException extends \PrestaShop\PrestaShop\Core\Domain\ApiClient\Exception\ApiClientException
{
    public const INVALID_ID = 1;
    public const CLIENT_ID_ALREADY_USED = 2;
    public const INVALID_CLIENT_ID = 3;
    public const CLIENT_NAME_ALREADY_USED = 4;
    public const INVALID_CLIENT_NAME = 5;
    public const INVALID_ENABLED = 6;
    public const INVALID_DESCRIPTION = 7;
    public const CLIENT_ID_TOO_LARGE = 8;
    public const CLIENT_NAME_TOO_LARGE = 9;
    public const DESCRIPTION_TOO_LARGE = 10;
    public const INVALID_SCOPES = 11;
    public const NON_INSTALLED_SCOPES = 12;
    public const NOT_POSITIVE_LIFETIME = 13;
    public const INVALID_SECRET = 14;
    public static function buildFromPropertyPath(string $propertyPath, string $message, string $template): self
    {
    }
}
