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
     * @return \PrestaShop\PrestaShop\Core\Backup\BackupCollectionInterface
     */
    public function retrieveBackups();
}
