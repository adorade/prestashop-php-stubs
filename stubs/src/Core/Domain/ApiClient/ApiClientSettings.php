<?php

namespace PrestaShop\PrestaShop\Core\Domain\ApiClient;

/**
 * Defines settings for API Client.
 */
class ApiClientSettings
{
    public const MAX_CLIENT_ID_LENGTH = 255;
    public const MAX_CLIENT_NAME_LENGTH = 255;
    public const MAX_DESCRIPTION_LENGTH = \PrestaShopBundle\Form\Admin\Type\FormattedTextareaType::LIMIT_TEXT_UTF8;
}
