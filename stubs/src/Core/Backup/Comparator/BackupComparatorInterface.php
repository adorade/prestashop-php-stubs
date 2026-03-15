<?php

namespace PrestaShop\PrestaShop\Core\Backup\Comparator;

/**
 * Interface BackupComparatorInterface defines contract for backups comparator.
 */
interface BackupComparatorInterface
{
    /**
     * Compare 2 backups.
     *
     * @param BackupInterface $backup1
     * @param BackupInterface $backup2
     *
     * @return int
     */
    public function compare(\PrestaShop\PrestaShop\Core\Backup\BackupInterface $backup1, \PrestaShop\PrestaShop\Core\Backup\BackupInterface $backup2);
}
