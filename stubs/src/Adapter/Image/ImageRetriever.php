<?php

namespace PrestaShop\PrestaShop\Adapter\Image;

/**
 * This class is mainly responsible of Product images.
 */
class ImageRetriever
{
    public function __construct(\Link $link)
    {
    }
    /**
     * @param array $product
     * @param Language $language
     *
     * @return array
     */
    public function getAllProductImages(array $product, \Language $language)
    {
    }
    /**
     * @param array $product
     * @param Language $language
     *
     * @return array
     */
    public function getProductImages(array $product, \Language $language)
    {
    }
    /**
     * @param Product|Store|Category|Manufacturer|Supplier $object
     * @param int $id_image
     *
     * @return array|null
     *
     * @throws PrestaShopDatabaseException
     */
    public function getImage($object, $id_image)
    {
    }
    /**
     * @param string $imageHash
     *
     * @return array
     */
    public function getCustomizationImage($imageHash)
    {
    }
    /**
     * @param Language $language
     *
     * @return array
     *
     * @throws PrestaShopDatabaseException
     * @throws PrestaShopException if the image type is not found
     */
    public function getNoPictureImage(\Language $language)
    {
    }
}
