<?php

namespace PrestaShop\PrestaShop\Core\Backup;

/**
 * Interface BackupCollectionInterface defines contract for backup collection.
 */
interface BackupCollectionInterface
{
    /**
     * Add backup to collection.
     *
     * @param BackupInterface $backup
     *
     * @return self
     */
    public function add(\PrestaShop\PrestaShop\Core\Backup\BackupInterface $backup);
    /**
     * Get all backups.
     *
     * @return BackupInterface[]
     */
    public function all();
}
