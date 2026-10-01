<?php

namespace PrestaShop\PrestaShop\Core\Import\File\DataRow;

/**
 * Interface DataRowPresenterInterface describes a data row presenter.
 */
interface DataRowPresenterInterface
{
    /**
     * Present a data row.
     *
     * @param DataRowInterface $dataRow
     *
     * @return array
     */
    public function present(\PrestaShop\PrestaShop\Core\Import\File\DataRow\DataRowInterface $dataRow);
}
