<?php

namespace PrestaShop\PrestaShop\Core\Import\File\DataRow;

/**
 * Class DataRowCollectionPresenter presents a data row collection.
 */
final class DataRowCollectionPresenter implements \PrestaShop\PrestaShop\Core\Import\File\DataRow\DataRowCollectionPresenterInterface
{
    /**
     * @param DataRowPresenterInterface $dataRowPresenter
     */
    public function __construct(\PrestaShop\PrestaShop\Core\Import\File\DataRow\DataRowPresenterInterface $dataRowPresenter)
    {
    }
    /**
     * {@inheritdoc}
     */
    public function present(\PrestaShop\PrestaShop\Core\Import\File\DataRow\DataRowCollectionInterface $dataRowCollection)
    {
    }
}
