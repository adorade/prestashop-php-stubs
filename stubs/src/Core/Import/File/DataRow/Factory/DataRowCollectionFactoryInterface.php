<?php

namespace PrestaShop\PrestaShop\Core\Import\File\DataRow\Factory;

/**
 * Interface DataRowCollectionFactoryInterface describes a data row collection factory.
 */
interface DataRowCollectionFactoryInterface
{
    /**
     * Builds a data row collection.
     *
     * @param SplFileInfo $file
     * @param int $maxRowsInCollection maximum number of rows this collection can have. Unlimited if not provided.
     *
     * @return DataRowCollectionInterface
     */
    public function buildFromFile(\SplFileInfo $file, $maxRowsInCollection = null);
}
