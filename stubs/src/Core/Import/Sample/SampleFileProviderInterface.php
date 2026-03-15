<?php

namespace PrestaShop\PrestaShop\Core\Import\Sample;

/**
 * Interface SampleFileProviderInterface defines contract for sample import file provider.
 */
interface SampleFileProviderInterface
{
    /**
     * Get sample import file.
     *
     * @param string $sampleFileName
     *
     * @return File|null File if files was found or null otherwise
     */
    public function getFile($sampleFileName);
}
