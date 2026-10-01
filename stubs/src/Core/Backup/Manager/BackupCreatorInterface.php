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
     * @return \PrestaShop\PrestaShop\Core\Backup\BackupInterface
     */
    public function createBackup(): \PrestaShop\PrestaShop\Core\Backup\BackupInterface;
}
