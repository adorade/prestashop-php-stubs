<?php

namespace PrestaShop\PrestaShop\Core\File;

/**
 * Interface FileFinderInterface defines a file finder.
 */
interface FileFinderInterface
{
    /**
     * Finds files.
     *
     * @return array of file paths
     */
    public function find();
}
