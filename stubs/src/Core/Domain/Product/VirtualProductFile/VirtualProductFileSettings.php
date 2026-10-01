<?php

namespace PrestaShop\PrestaShop\Core\Domain\Product\VirtualProductFile;

class VirtualProductFileSettings
{
    /**
     * Following constants defines maximum characters length constraints for corresponding fields
     */
    public const MAX_DISPLAY_FILENAME_LENGTH = 255;
    public const MAX_FILENAME_LENGTH = 255;
    public const MAX_ACCESSIBLE_DAYS_LIMIT = 9999999999;
    public const MAX_DOWNLOAD_TIMES_LIMIT = 9999999999;
}
