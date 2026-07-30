<?php

namespace PrestaShop\PrestaShop\Adapter\Domain;

/**
 * Class AbstractObjectModelHandler is responsible for executing legacy code which is common for legacy ObjectModel.
 *
 * @internal
 */
abstract class AbstractObjectModelHandler
{
    /**
     * This function assigns stores ids to the given object. It removes previously set shop ids and adds new ids instead.
     *
     * @param ObjectModel $objectModel
     * @param array $shopAssociation
     *
     * @throws PrestaShopDatabaseException
     */
    protected function associateWithShops(\ObjectModel $objectModel, array $shopAssociation)
    {
    }
    /**
     * @param ObjectModel $objectModel
     * @param array $multiStoreColumnAssociation - an array key contains shop id while values contains the mapping of
     *                                           column and its value
     */
    protected function updateMultiStoreColumns(\ObjectModel $objectModel, array $multiStoreColumnAssociation)
    {
    }
    /**
     * @param string $imagePath the original image path
     * @param int $imageId
     * @param string $belongsTo object name to which image belongs (e.g. 'supplier', 'manufacturer')
     *
     * @return string
     */
    protected function getTmpImageTag($imagePath, $imageId, $belongsTo)
    {
    }
    /**
     * Calculates and returns image size in kb for provided image path. Returns null if image doesn't exist
     *
     * @param string $imagePath
     *
     * @return float|null
     */
    protected function getImageSize($imagePath)
    {
    }
}
