<?php

namespace PrestaShop\PrestaShop\Core\Foundation\Filesystem;

class FileSystem
{
    /**
     * Default mode for directories
     */
    public const DEFAULT_MODE_FOLDER = 0755;
    /**
     * Default mode for files
     */
    public const DEFAULT_MODE_FILE = 0644;
    /**
     * Replaces directory separators with the system's native one
     * and trims the trailing separator.
     */
    public function normalizePath($path)
    {
    }
    /**
     * Joins an arbitrary number of paths, normalizing them along the way.
     */
    public function joinPaths()
    {
    }
    /**
     * Performs a depth first listing of directory entries.
     * Throws exception if $path is not a file.
     * If $path is a file and not a directory, just gets the file info for it
     * and return it in an array.
     *
     * @param string $path
     *
     * @return SplFileInfo[] Array of SplFileInfo object indexed by file path
     */
    public function listEntriesRecursively($path)
    {
    }
    /**
     * Same as listEntriesRecursively but returns only files.
     */
    public function listFilesRecursively($path)
    {
    }
}
