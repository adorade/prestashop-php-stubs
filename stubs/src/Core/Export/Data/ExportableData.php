<?php

namespace PrestaShop\PrestaShop\Core\Export\Data;

/**
 * Class ExportableData stores data that should be written to export file.
 */
final class ExportableData implements \PrestaShop\PrestaShop\Core\Export\Data\ExportableDataInterface
{
    /**
     * @param string[] $titles
     * @param array $rows
     */
    public function __construct(array $titles, array $rows)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getTitles()
    {
    }
    /**
     * {@inheritdoc}
     */
    public function getRows()
    {
    }
}
