<?php

namespace PrestaShop\PrestaShop\Adapter\Import;

/**
 * Class ImportEntityDeleter is responsible for deleting import entities.
 */
final class ImportEntityDeleter implements \PrestaShop\PrestaShop\Core\Import\Entity\ImportEntityDeleterInterface
{
    /**
     * @param \Doctrine\DBAL\Connection $connection
     * @param string $dbPrefix
     * @param \PrestaShop\PrestaShop\Adapter\Configuration $configuration
     * @param \PrestaShop\PrestaShop\Core\Image\Deleter\ImageFileDeleterInterface $imageFileDeleter
     */
    public function __construct(\Doctrine\DBAL\Connection $connection, $dbPrefix, \PrestaShop\PrestaShop\Adapter\Configuration $configuration, \PrestaShop\PrestaShop\Core\Image\Deleter\ImageFileDeleterInterface $imageFileDeleter)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function deleteAll($importEntity)
    {
    }
}
