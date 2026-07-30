<?php

namespace PrestaShop\PrestaShop\Core\Backup\Manager;

/**
 * Interface BackupRemoverInterface defines contract for backup remover.
 */
interface BackupRemoverInterface
{
    /**
     * @param BackupInterface $backup
     *
     * @return bool True if backup were removed successfully or False otherwise
     */
    public function remove(\PrestaShop\PrestaShop\Core\Backup\BackupInterface $backup);
}
