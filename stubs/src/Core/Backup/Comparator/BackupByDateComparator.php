<?php

namespace PrestaShop\PrestaShop\Core\Backup\Comparator;

/**
 * Class BackupByDateComparator compares 2 backups by creation date.
 */
final class BackupByDateComparator implements \PrestaShop\PrestaShop\Core\Backup\Comparator\BackupComparatorInterface
{
    /**
     * {@inheritdoc}
     */
    public function compare(\PrestaShop\PrestaShop\Core\Backup\BackupInterface $backup1, \PrestaShop\PrestaShop\Core\Backup\BackupInterface $backup2)
    {
    }
}
