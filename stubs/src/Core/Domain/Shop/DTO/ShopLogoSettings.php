<?php

namespace PrestaShop\PrestaShop\Core\Domain\Shop\DTO;

/**
 * Holds default settings for shop logos.
 */
class ShopLogoSettings
{
    public const HEADER_LOGO_FILE_NAME = 'PS_LOGO';
    public const MAIL_LOGO_FILE_NAME = 'PS_LOGO_MAIL';
    public const INVOICE_LOGO_FILE_NAME = 'PS_LOGO_INVOICE';
    public const FAVICON_FILE_NAME = 'PS_FAVICON';
    /**
     * @var array<int, string> List of available image mime types
     */
    public const AVAILABLE_LOGO_IMAGE_EXTENSIONS = ['gif', 'jpg', 'jpeg', 'jpe', 'png', 'webp', 'svg'];
    /**
     * @var array<int, string> List of available image mime types for mail and invoice
     */
    public const AVAILABLE_MAIL_AND_INVOICE_LOGO_IMAGE_EXTENSIONS = ['gif', 'jpg', 'jpeg', 'jpe', 'png', 'webp'];
    /**
     * @var string - a type used for icon images for shop logo
     */
    public const AVAILABLE_ICON_IMAGE_EXTENSION = 'ico';
    /**
     * Gets the list of available extensions with dot attached to the front of the extension
     *
     * @param string $fieldName optional configuration key
     *
     * @return array<int, string>
     */
    public function getLogoImageExtensionsWithDot(string $fieldName = '')
    {
    }
    /**
     * Gets icon image extension with dot attached to the front.
     *
     * @return string
     */
    public function getIconImageExtensionWithDot()
    {
    }
}
