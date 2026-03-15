<?php

namespace PrestaShop\PrestaShop\Core\Backup\Manager;

/**
 * Interface BackupCreatorInterface defines contract for backup creator.
 */
interface BackupCreatorInterface
{
    /**
     * Create new backup.
     *
     * @return BackupInterface
     */
    public function createBackup();
}
