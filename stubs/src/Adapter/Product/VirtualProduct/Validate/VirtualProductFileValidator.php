<?php

namespace PrestaShop\PrestaShop\Adapter\Product\VirtualProduct\Validate;

/**
 * Validates VirtualProductFile properties using legacy object model validation
 * Legacy object ProductDownload is referred as VirtualProductFile in Core
 */
class VirtualProductFileValidator extends \PrestaShop\PrestaShop\Adapter\AbstractObjectModelValidator
{
    /**
     * @param VirtualProductFile $virtualProductFile
     */
    public function validate(\ProductDownload $virtualProductFile): void
    {
    }
}
