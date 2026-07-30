<?php

namespace PrestaShop\PrestaShop\Core\Import\File\DataRow\Factory;

/**
 * Class DataRowCollectionFactory defines a data row collection factory.
 */
final class DataRowCollectionFactory implements \PrestaShop\PrestaShop\Core\Import\File\DataRow\Factory\DataRowCollectionFactoryInterface
{
    /**
     * @param FileReaderInterface $fileReader
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Import\File\FileReaderInterface $fileReader)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function buildFromFile(\SplFileInfo $file, $maxRowsInCollection = null)
    {
    }
}
