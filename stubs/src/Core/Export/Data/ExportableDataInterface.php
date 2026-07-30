<?php

namespace PrestaShop\PrestaShop\Core\Export\Data;

/**
 * Interface ExportableDataInterface.
 */
interface ExportableDataInterface
{
    /**
     * Titles data.
     *
     * @return string[]
     */
    public function getTitles();
    /**
     * Rows data.
     *
     * @return array[]
     */
    public function getRows();
}
