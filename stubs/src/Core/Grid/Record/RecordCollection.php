<?php

namespace PrestaShop\PrestaShop\Core\Grid\Record;

/**
 * Class RecordCollection is a wrapper around rows from database.
 */
final class RecordCollection extends \PrestaShop\PrestaShop\Core\Grid\Collection\AbstractCollection implements \PrestaShop\PrestaShop\Core\Grid\Record\RecordCollectionInterface
{
    /**
     * @param array $records Raw records data
     */
    public function __construct(array $records = [])
    {
    }
    /**
     * {@inheritdoc}
     */
    public function all()
    {
    }
}
