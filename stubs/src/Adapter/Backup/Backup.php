<?php

namespace PrestaShop\PrestaShop\Adapter\Backup;

/**
 * Class Backup represents single database backup.
 *
 * @internal
 */
final class Backup implements \PrestaShop\PrestaShop\Core\Backup\BackupInterface
{
    /**
     * @param string $fileName Backup file name
     */
    public function __construct($fileName)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getFileName()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getFilePath()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getUrl()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getSize()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getAge()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getDate()
    {
    }
}
