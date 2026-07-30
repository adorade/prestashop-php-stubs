<?php

namespace PrestaShop\PrestaShop\Core\Backup\Repository;

/**
 * Interface BackupRepositoryInterface defines contract for backup repository.
 */
interface BackupRepositoryInterface
{
    /**
     * Get available backups.
     *
     * @return BackupCollectionInterface
     */
    public function retrieveBackups();
}
