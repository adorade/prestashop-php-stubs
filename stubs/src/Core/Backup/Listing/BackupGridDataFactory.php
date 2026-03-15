<?php

namespace PrestaShop\PrestaShop\Core\Backup\Listing;

/**
 * This class provides backups for listing in grid.
 */
final class BackupGridDataFactory implements \PrestaShop\PrestaShop\Core\Grid\Data\Factory\GridDataFactoryInterface
{
    /**
     * @param BackupRepositoryInterface $backupRepository
     * @param BackupComparatorInterface $backupByDateComparator
     * @param TranslatorInterface $translator
     * @param string $languageDateTimeFormat
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Backup\Repository\BackupRepositoryInterface $backupRepository, \PrestaShop\PrestaShop\Core\Backup\Comparator\BackupComparatorInterface $backupByDateComparator, \Symfony\Contracts\Translation\TranslatorInterface $translator, $languageDateTimeFormat)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getData(\PrestaShop\PrestaShop\Core\Grid\Search\SearchCriteriaInterface $searchCriteria)
    {
    }
}
