<?php

namespace PrestaShop\PrestaShop\Core\Import\File\DataRow;

/**
 * Interface DataRowCollectionPresenterInterface describes a data row collection presenter.
 */
interface DataRowCollectionPresenterInterface
{
    /**
     * Present a data row collection into array.
     *
     * @param DataRowCollectionInterface $dataRowCollection
     *
     * @return array
     */
    public function present(\PrestaShop\PrestaShop\Core\Import\File\DataRow\DataRowCollectionInterface $dataRowCollection);
}
